<?php
    class ProductController {

        private $product_model;

        public function __construct() {
            $this -> product_model = new ProductModel();
        }

        public function all_products() {
            $products = $this -> product_model -> get_products();

            /* require_once('../php/views/ProductView.php'); */
            require_once('php/views/ProductView.php'); /* <----- Cambio */
        }

    }
