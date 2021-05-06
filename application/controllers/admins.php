<?php
defined('BASEPATH') OR exit('no direct script accesss allowed!');

class admins extends CI_Controller
{
    public function index()
    {
        $this->load->view('/admin/login');
    }
    public function verify_login()
    {
        redirect('/admins/show_dashboard');
    }
    public function show_dashboard()
    {
        $this->load->view('/admin/dashboard');
    }
    public function show_products()
    {
        $this->load->view('/admin/products');
    }
}
?>