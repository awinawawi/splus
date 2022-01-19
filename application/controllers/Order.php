<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('M_order');
    }

    public function index()
    {
        // $this->load->view('user/order/index');
        $a = array(
            "page"  => "Order Page"
        );

        print_r($a);
    }

    public function produk($slug)
    {
        $produk     = $this->M_order->getProduk($slug);
        empty($produk) ? redirect(base_url()) : true;
        $this->load->view('user/order/produk', ['varian' => $produk]);
    }

    public function produk_kategori($slug)
    {
        $produk     = $this->M_order->getProduk($slug);
        empty($produk) ? redirect(base_url()) : true;
        $this->load->view('user/order/produk_kategori', ['varian' => $produk]);
    }

    public function produk_varian()
    {
        $_POST ? true : redirect('order');
        $varian     = $this->M_order->getVarian($_POST['varian']);
        echo json_encode($varian);
    }

    public function produk_varian_harga()
    {
        $_POST ? true : redirect('order');
        $varian     = $this->M_order->getPrice($_POST['varian']);
        echo json_encode($varian);
    }

    public function keranjang()
    {
        $id             = $this->session->userdata('user_session_id');
        $data['cart']   = $this->M_order->getCart($id);
        $this->load->view('user/order/cart', $data);
    }

    // public function tambah_keranjang()
    // {

    //     $nama = $this->input->post['nama_produk'];
    //     $tipe = $this->input->post['tipe_produk'];
    //     $harga_m = $this->input->post['order_varian_harga_meter_value'];
    //     $lebar = $this->input->post['order_varian_ukuran_lebar'];
    //     $tinggi = $this->input->post['order_varian_ukuran_tinggi'];
    //     $warna = $this->input->post['order_varian_warna_value'];
    //     $jumlah = $this->input->post['order_produk_jumlah'];
    //     $harga_p = $this->input->post['order_varian_harga_value'];
    //     $data = array(
    //         'session_id'            => $this->session->userdata('user_session_id'),
    //         'nama_produk'           => $nama,
    //         'tipe_produk'           => $tipe,
    //         'harga_produk_meter'    => $harga_m,
    //         'lebar_produk'          => $lebar,
    //         'tinggi_produk'         => $tinggi,
    //         'warna_produk'          => $warna,
    //         'jumlah_produk'         => $jumlah,
    //         'harga_produk'          => $harga_p
    //     );

    //     $this->M_order->addCart($data);
    //     redirect('cart');

    //     $nama_produk = $this->input->post['nama_produk'];
    //     $tipe_produk = $this->input->post['tipe_produk'];
    //     $harga_produk_meter = $this->input->post['order_varian_harga_meter_value'];
    //     $lebar_produk = $this->input->post['order_varian_ukuran_lebar'];
    //     $tinggi_produk = $this->input->post['order_varian_ukuran_tinggi'];
    //     $warna_produk = $this->input->post['order_varian_warna_value'];
    //     $jumlah_produk = $this->input->post['order_produk_jumlah'];
    //     $harga_produk = $this->input->post['order_varian_harga_value'];
    //     $this->session->set_userdata('user_session_id', (isset($_POST['session_id'])));
    //     $this->M_order->addCart($nama_produk, $tipe_produk, $harga_produk_meter, $lebar_produk, $tinggi_produk, $warna_produk, $jumlah_produk, $harga_produk);
    //     redirect('cart');
    // }


    public function tambah_keranjang()
    {
        $this->session->set_userdata('user_session_id', $_POST['session_id']);
        $this->M_order->addCart($_POST);
        redirect('cart');
    }

    public function update_keranjang()
    {
        foreach ($_POST['kuantitas'] as $key => $value) {
            $old = $this->M_order->getCartId($key);
            $update = [
                'keranjang_id'      => $key,
                'jumlah_produk'     => $value,
                'harga_produk'      => (($old->lebar_produk / 1000 * $old->tinggi_produk / 1000) * $old->harga_produk_meter) * $value,
            ];
            $this->M_order->updateCart($update);
        }

        redirect('cart');
    }

    public function delete_keranjang($id)
    {
        $this->M_order->deleteCart($id);
        redirect('cart');
    }

    public function postUserSession()
    {
        $this->session->set_userdata('user_session_id', $_POST['session_id']);
    }

    // ajax request address and shipment
    public function getProvince()
    {
        $url = "https://pro.rajaongkir.com/api/province";

        echo json_encode($this->getAddress($url));
    }

    public function getCity($id)
    {
        $url = "https://pro.rajaongkir.com/api/city?province=" . $id;
        echo json_encode($this->getAddress($url));
    }

    public function getDistrict($id)
    {
        $url = "https://pro.rajaongkir.com/api/subdistrict?city=" . $id;
        echo json_encode($this->getAddress($url));
    }

    // Api Request
    private function getAddress($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array("key: dbfe53e978898ea8e87d7602e123cab8"),
        ));

        $response = json_decode(curl_exec($curl));
        return $response->rajaongkir->results;
    }

    public function getCost()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://pro.rajaongkir.com/api/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=108&originType=city&destination=" . $_POST['destination'] . "&destinationType=subdistrict&weight=5000&courier=" . $_POST['courier'],
            CURLOPT_HTTPHEADER => array(
                "key: dbfe53e978898ea8e87d7602e123cab8",
                "Content-Type: application/x-www-form-urlencoded"
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode(curl_exec($curl));
        foreach ($response->rajaongkir->results[0]->costs as $v) {
            $html = '<div class="row pl-20"><input type="radio" value="' . $response->rajaongkir->results[0]->name . ',' . $v->service . ',' . $v->cost[0]->value . '" name="kurir" class="form-control col-lg-3 btn_courier_cost" style="width:20px;height:30px"><div class="col-lg-9 pt-10">' . $v->service . ' ( Rp ' . number_format($v->cost[0]->value) . ' ) <span class="pl-5">' . $v->cost[0]->etd . ' hari</span></div></div>';
            echo $html;
        };
    }

    // Create Order
    public function createOrder()
    {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $tlp = $_POST['telepon'];
        $hp = $_POST['handphone'];
        $prov = $_POST['provinsi'];
        $kota = $_POST['kota'];
        $kec = $_POST['kecamatan'];
        $almt = $_POST['alamat'];
        $pos = $_POST['kodepos'];

        if (empty($nama) || empty($email) || empty($tlp) || empty($hp)) {
            $this->output
                ->set_status_header(403)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'Informasi pelanggan harus lengkap..')))
                ->_display();
            exit();
        } else
        if (empty($prov) || empty($kota) || empty($kec) || empty($almt) || empty($pos)) {
            $this->output
                ->set_status_header(403)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'Informasi alamat pengiriman harus lengkap..')))
                ->_display();
            exit();
        }

        $data               = $_POST;
        $dataCustomer = array(
            'session_id'    => $this->session->userdata('user_session_id'),
            'nama'          => $nama,
            'email'         => $email,
            'telepon'       => $tlp,
            'handphone'     => $hp,
            'alamat'        => $almt,
            'kecamatan'     => $kec,
            'kota'          => $kota,
            'provinsi'      => $prov,
            'kodepos'       => $pos
        );

        $customer = $this->M_order->inputCustomer($dataCustomer);
        $data['pelanggan_id'] = $customer;

        // split kurir info
        $kurir              = explode(",", $_POST['kurir']);
        $faktur             = 'SMTT/' . date('d-m-y') . '/' . rand(1111, 9999);
        $dataOrder = array(
            'pelanggan_id'          => $data['pelanggan_id'],
            'session_id'            => $this->session->userdata('user_session_id'),
            'faktur'                => $faktur,
            'tanggal_pengiriman'    => $_POST['tanggal_pengiriman'],
            'kurir_pengiriman'      => $kurir[0],
            'layanan_pengiriman'    => $kurir[1],
            'ongkos_pengiriman'     => $kurir[2],
            'catatan_pembelian'     => $_POST['catatan_pembelian'],
            'metode_pembayaran'     => $_POST['metode_pembayaran']
        );

        $cart  = $this->M_order->getCart($this->session->userdata('user_session_id'));
        foreach ($cart as $c) {
            $dataOrder['nama_produk']        = $c->nama_produk;
            $dataOrder['tipe_produk']        = $c->tipe_produk;
            $dataOrder['harga_produk_meter'] = $c->harga_produk_meter;
            $dataOrder['lebar_produk']       = $c->lebar_produk;
            $dataOrder['tinggi_produk']      = $c->tinggi_produk;
            $dataOrder['warna_produk']       = $c->warna_produk;
            $dataOrder['jumlah_produk']      = $c->jumlah_produk;
            $dataOrder['harga_produk']       = $c->harga_produk;
            //input data order
            $order = $this->M_order->createOrder($dataOrder);
            if ($order) { //hapus cart
                $this->M_order->deleteCart($c->keranjang_id);
            }
        }

        $email = $_POST['email'];
        $this->sendEmail($email, $faktur);
        $this->sendEmail('splusindo255@gmail.com', $faktur);
        echo $faktur;
    }

    private function sendEmail($email, $faktur = null)
    {
        $data['order'] = $this->M_order->getOrder($faktur);
        $from_email = "quotation@splusindonesia.com";
        $to_email   = $email;
        $html       = $this->load->view('user/order/email', $data, true);

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://srv58.niagahoster.com',
            'smtp_port' => 465,
            'smtp_user' => $from_email,
            'smtp_pass' => 'smtt@2511',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from($from_email, 'S-Plus Indonesia');
        $this->email->to($to_email);
        $this->email->subject('Pembelian Sunshade S-Plus Indonesia');
        $this->email->message($html);

        //Send mail 
        if ($this->email->send()) {
            $this->session->set_flashdata("notif", "Email berhasil terkirim.");
        } else {
            $this->session->set_flashdata("notif", "Email gagal dikirim.");
            echo "gagal";
        }
    }
}
