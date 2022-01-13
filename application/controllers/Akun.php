<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pelanggan');

        // cek user session
        (empty($this->session->userdata('user_login')) ? redirect(base_url('login')) : "");
    }

    public function index()
    {
        $email          = $this->session->userdata('email');
        $x['profile']   = $this->M_pelanggan->profile($email);
        $this->load->view('user/akun/home', $x);
    }

    public function pesanan($faktur = null, $print = null)
    {
        if (empty($faktur) && empty($print)) {
            $x['pesanan'] = $this->M_pelanggan->pesanan($this->session->userdata('user_id'));
            $this->load->view('user/akun/pesanan', $x);
        } else {
            $x['pesanan'] = $this->M_pelanggan->order_detail($faktur, $this->session->userdata('user_id'));
            if (!empty($x['pesanan'])) {
                if ($print == 'print') {
                    $this->load->view('reports/invoice', $x);
                    // $this->pdf->generate($html,"Informasi Pesanan #".$faktur);
                } elseif (empty($print)) {
                    $this->load->view('user/akun/pesanan_detail', $x);
                }
            } else {
                return redirect(base_url('akun/pesanan'));
            }
        }
    }

    public function pengaturan()
    {
        if ($_POST) {

            $profile = $this->M_pelanggan->profile($this->session->userdata('email'));

            //jika ada foto
            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path']          = './assets/user/images/user_profile/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['encrypt_name']         = true;

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                    if (!empty($profile->pelanggan_foto)) {
                        unlink('./assets/user/images/user_profile/' . $profile->pelanggan_foto);
                    }
                } else {
                    $this->session->set_flashdata('msg', '<span style="color:white; float:right; background-color:red; opacity:0.8; padding:10px 15px; border-radius:10px;"><i class="fa fa-remove"></i> Gagal menyimpan foto!</span>');
                }
            } else {
                $foto = $profile->pelanggan_foto;
            }

            // jika ganti password
            if (!empty($_POST['password'])) {
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            } else {
                $password = $profile->pelanggan_password;
            }

            // jika ganti email
            if ($_POST['email'] !== $profile->pelanggan_email) {
                $email = $_POST['email'];
                $this->session->set_userdata('email', $email);
            } else {
                $email = $profile->pelanggan_email;
            }

            $update = array(
                'pelanggan_foto'        => $foto,
                'pelanggan_nama'        => $_POST['nama'],
                'pelanggan_ttl'         => $_POST['ttl'],
                'pelanggan_telpon'      => $_POST['telpon'],
                'pelanggan_provinsi'    => $_POST['provinsi'],
                'pelanggan_kota'        => $_POST['kota'],
                'pelanggan_kecamatan'   => $_POST['kecamatan'],
                'pelanggan_kelurahan'   => $_POST['kelurahan'],
                'pelanggan_alamat'      => $_POST['alamat'],
                'pelanggan_kodepos'     => $_POST['kodepos'],
                'pelanggan_username'    => $_POST['username'],
                'pelanggan_email'       => $email,
                'pelanggan_password'    => $password,
            );

            if ($this->M_pelanggan->update_setting($update, $profile->pelanggan_id)) {
                $this->session->set_flashdata('msg', '<span style="color:white; float:right; background-color:green; opacity:0.8; padding:10px 15px; border-radius:10px;"><i class="fa fa-remove"></i> Berhasil menyimpan perubahan!</span>');
                return redirect(base_url('akun/pengaturan'));
            } else {
                $this->session->set_flashdata('msg', '<span style="color:white; float:right; background-color:red; opacity:0.8; padding:10px 15px; border-radius:10px;"><i class="fa fa-remove"></i> Gagal menyimpan perubahan!</span>');
                return redirect(base_url('akun/pengaturan'));
            }
        } else {
            $email          = $this->session->userdata('email');
            $x['profile']   = $this->M_pelanggan->profile($email);
            $this->load->view('user/akun/pengaturan', $x);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        return redirect('login');
    }


    // Transaksi Data

    public function keranjang()
    {
        $x['cart']      = $this->M_pelanggan->cart($this->session->userdata('user_id'));
        $this->load->view('user/akun/keranjang', $x);
    }

    public function pembayaran()
    {
        $x['checkout']  = $this->M_pelanggan->checkout($this->session->userdata('user_id'));
        $x['fva']       = json_decode(json_encode($this->xendit->getVirtualAccountBanks()));
        $this->load->view('user/akun/pembayaran', $x);
    }

    public function pembayaran_konfirmasi()
    {
        ($_POST ? "" : redirect(base_url()));

        $id     = $_POST['external_id'];
        $bank   = $_POST['bank_code'];
        $name   = $_POST['name'];

        $data = $this->xendit->createCallbackVirtualAccount($id, $bank, $name);
        if ($data['bank_code'] == 'BRI') {
            $suggest = $this->xendit->createCallbackVirtualAccountSuggestAmount($data['id'], $_POST['amount']);
        }

        $x['data'] = array(
            'external_id'               => $data['external_id'],
            'id'                        => $data['id'],
            'virtual_account_number'    => $data['account_number'],
            'bank_code'                 => $data['bank_code'],
            'status'                    => $data['status'],
            'amount'                    => $_POST['amount'],
        );

        //Tambahkan data transaksi pada user
        $pelanggan_id       = $_POST['pelanggan_id'];
        $produk_id          = $_POST['produk_id'];
        $produk_kuantitas   = $_POST['produk_kuantitas'];
        $produk_total       = $_POST['produk_total'];
        $keranjang_id       = $_POST['keranjang_id'];
        $warna              = $_POST['keranjang_warna'];
        $ukuran             = $_POST['keranjang_ukuran'];

        $pids   = explode(",", $produk_id);
        $pqtys  = explode(",", $produk_kuantitas);
        $ptts   = explode(",", $produk_total);
        $kids   = explode(",", $keranjang_id);
        $ukr    = explode(",", $ukuran);
        $wrn    = explode(",", $warna);

        $arr = array();
        $cn = count($pids);
        for ($i = 0; $i <= $cn; $i++) {
            if (!empty($pids[$i])) {
                $arr[$i] = array(
                    'keranjang_id'  => $kids[$i],
                    'produk_id'     => $pids[$i],
                    'kuantitas'     => $pqtys[$i],
                    'harga'         => $ptts[$i],
                    'warna'         => $wrn[$i],
                    'ukuran'        => $ukr[$i]
                );
            }
        }

        for ($i = 0; $i <= count($arr) - 1; $i++) {
            $data_pesanan = array(
                'pesanan_faktur'    => $id,
                'pesanan_pelanggan_id' => $pelanggan_id,
                'pesanan_produk_id' => $arr[$i]['produk_id'],
                'pesanan_kuantitas' => $arr[$i]['kuantitas'],
                'pesanan_total'     => $arr[$i]['harga'],
                'pesanan_status'    => 'Belum Bayar',
                'pesanan_ukuran'    => $arr[$i]['ukuran'],
                'pesanan_warna'     => $arr[$i]['warna'],
                'pesanan_metode_pembayaran'     => 'Virtual Account ' . $_POST['bank_code']
            );

            $po = $this->M_pelanggan->place_order($data_pesanan);
            if ($po) {
                // kurangi stok produk
                $data_produk    = $this->db->get_where('tbl_produk', array('produk_id' => $arr[$i]['produk_id']))->row();
                $qty_baru       = $data_produk->produk_stok - $arr[$i]['kuantitas'];
                $update_stok    = array(
                    'produk_id'     => $arr[$i]['produk_id'],
                    'produk_stok'   => $qty_baru
                );

                $this->M_pelanggan->update_stock($update_stok);
                $this->M_pelanggan->cart_delete($arr[$i]['keranjang_id']);
            }
        }

        $this->load->view('user/akun/pembayaran_virtual_account', $x);
    }

    public function transaksi()
    {
        $this->load->library('xendit');
        print_r($this->xendit->createCallbackVirtualAccount('id067666', 'BNI', 'Akhmad'));
    }

    public function ajax_add_to_cart()
    {

        ($_POST ? "" : redirect(base_url())); //Redirect jika method bukan post
        $data = array(
            'keranjang_pelanggan_id'    => $_POST['user_id'],
            'keranjang_produk_id'       => $_POST['produk_id'],
            'keranjang_warna'           => $_POST['warna'],
            'keranjang_kuantitas'       => $_POST['kuantitas'],
            'keranjang_total'           => $_POST['total'],
            'keranjang_ukuran'          => $_POST['ukuran']
        );

        $stok = array(
            'produk_id'     => $_POST['produk_id'],
            'produk_stok'   => $_POST['produk_stok'] - $_POST['kuantitas'],
        ); // Total stock sebelumnya dikurangi permintaan

        $insert = $this->M_pelanggan->add_to_cart($data);
        if ($insert) {
            // $this->M_pelanggan->update_stock($stok); // kurangi stok produk
            echo 'success+' . $insert;
        } else {
            echo 'add cart failed';
        }
    }

    public function ajax_cart_update()
    {
        ($_POST ? "" : redirect(base_url())); //Redirect jika method bukan post
        $harga = $this->M_pelanggan->get_cart_by_id($_POST['cid']);
        $cart = array(
            'keranjang_id'          => $_POST['cid'],
            'keranjang_kuantitas'   => $_POST['kuantitas'],
            'keranjang_total'       => $harga->produk_harga * $_POST['kuantitas']
        );
        $update = $this->M_pelanggan->update_cart($cart);
        if ($update) {
            echo "success";
        } else {
            echo "update cart failed";
        }
    }

    public function get_cart_total()
    {
        ($_POST ? "" : redirect(base_url())); //Redirect jika method bukan post
        $cart = $this->M_pelanggan->cart($_POST['uid']);
        $total = 0;
        foreach ($cart as $c) {
            $total += $c->keranjang_total;
        }
        echo "Rp " . number_format($total);
    }

    public function get_cart_items()
    {
        ($_POST ? "" : redirect(base_url())); //Redirect jika method bukan post
        $cart = $this->M_pelanggan->cart($_POST['uid']);
        $total = 0;
        foreach ($cart as $c) {
            $total += $c->keranjang_kuantitas;
        }
        echo $total;
    }

    public function ajax_remove_cart_by_id()
    {
        ($_POST ? "" : redirect(base_url())); //Redirect jika method bukan post
        $remove = $this->M_pelanggan->cart_delete($_POST['id']);
        if ($remove) {
            echo "success";
        } else {
            echo "remove cart failed";
        }
    }
}
