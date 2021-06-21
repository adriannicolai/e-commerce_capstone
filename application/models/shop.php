<?php
defined('BASEPATH') OR exit('no direct script access allowed!');

class shop extends CI_Model
{
    function fetch_categories()
    {
        return $this->db->query('SELECT * FROM categories LEFT JOIN category_images ON categories.id = category_images.category_id')->result_array();
    }
    function display_by_category($category_id)
    {
        $clean_category_id = $this->security->xss_clean($category_id);
        return $this->db->query('SELECT * FROM products LEFT JOIN images ON products.id = images.product_id WHERE category_id = ?', array($clean_category_id))->result_array();
    }
    function get_search($post)
    {
        return $this->db->query('SELECT * FROM products LEFT JOIN images ON products.id = images.product_id WHERE products.name LIKE ?', array('%'.$post['search'].'%'))->result_array();
    }
}
?>