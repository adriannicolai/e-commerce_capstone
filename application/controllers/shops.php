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
        $search_results['search_results'] = $this->shop->get_search($this->input->post(NULL, TRUE));
        $this->load->view('/shop/home', $search_results);
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
    public function fetch_categories()
    {
        $categories['categories'] = $this->shop->fetch_categories();
        $this->load->view('/shop/partials/category_list', $categories);
    }
}
?>