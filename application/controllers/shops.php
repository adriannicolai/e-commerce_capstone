<?php
defined('BASEPATH') OR exit('no direct script access allowed!');

class shops extends CI_Controller
{
    public function index()
    {
        $this->load->view('/shop/main_page');
    }
    public function get_search()
    {
        redirect('/shops/show_search_result');
    }
    public function show_search_result()
    {
        $this->load->view('/shop/home');
    }
    public function show_selected_product($id)
    {
        $product_id['id'] = $id;
        $this->load->view('/shop/display_item', $product_id);
    }
    public function show_cart()
    {
        $this->load->view('/shop/cart');
    }
}
?>