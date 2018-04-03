<?php
    class ProductController {

        private $product_model;

        public function __construct() {
            $this -> product_model = new ProductModel();
        }

        public function all_products() {
            $products = $this -> product_model -> get_products();

            require_once('php/views/ProductsView.php');
        }

        public function show_product_by_id($id) {
            $product = $this -> product_model -> get_producto_by_id($id);

            require_once('php/views/ProductView.php');
        }

    }
