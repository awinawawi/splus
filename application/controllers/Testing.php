<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

    public function __construct(){
        parent:: __construct();
    }

    public function index(){
        return redirect(base_url());
    }

    // Callback transaksi

    public function callback_fva_success(){
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $d = json_decode(file_get_contents("php://input"));
            $response   = $this->db->get_where('tbl_testing',array('external_id' => $d->external_id))->row();
            if(!empty($response)){
                $this->db->set('payment_id',$d->payment_id);
                $this->db->set('amount',$d->amount);
                $this->db->where('external_id',$d->external_id);
                $this->db->update('tbl_testing');

                // update status pesanan
                $this->db->set('pesanan_status','Sudah Bayar');
                $this->db->where('pesanan_faktur',$d->external_id);
                $this->db->update('tbl_pelanggan_pesanan');
            }
        } else {
            print_r("Cannot ".$_SERVER["REQUEST_METHOD"]." ".$_SERVER["SCRIPT_NAME"]);
        }
    }

    public function callback_fva_created(){
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $d = json_decode(file_get_contents("php://input"));

            $data = array(
                'id_create'         => $d->id,
                'external_id'       => $d->external_id,
                'account_number'    => $d->account_number,
                'name'              => $d->name,
                'bank_code'         => $d->bank_code,
                'status'            => $d->status,
                'suggested_amount'  => $d->suggested_amount
            );

            // check external_id
            $ext = $this->db->get_where('tbl_testing',array('external_id' => $d->external_id))->row();
            if(empty($ext)){
                $this->db->insert('tbl_testing', $data);
            }

            // $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
            // fwrite($myfile, $d);
            // fclose($myfile);

        } else {
            print_r("Cannot ".$_SERVER["REQUEST_METHOD"]." ".$_SERVER["SCRIPT_NAME"]);
        }
    }

    public function pembayaran($id,$amount){

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.xendit.co/callback_virtual_accounts/external_id=".$id."/simulate_payment",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "amount=".$amount,
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded",
            "Authorization: Basic eG5kX2RldmVsb3BtZW50X0FjcFJkRWZFUGlpTDQweUUwRzZjV0YzbmpkaGV5S0VXaVpoa1R5QjZGYjdJYVpRRFo1cUR4RmY2Rm13Q1BwdDo="
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

    }

    public function cek_pembayaran($id){
        $cek = $this->db->get_where('tbl_testing',array('external_id' => $id))->row();
        if($cek->payment_id != null){

            echo "paid";
        }else{
            echo "unpaid";
        }
    }
}