<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cpemesanan extends CI_Controller
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

    public function pemesanan1()
    {
        $id             = $this->session->userdata('user_session_id');
        $data['cart']   = $this->M_order->get_all_data($id);
        $this->load->view('user/pemesanan', $data);
    }
}
