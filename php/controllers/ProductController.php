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

            $ids = $this -> product_model -> get_ids();
            $total_ids = count($ids);

            $number = rand(0, $total_ids - 1);

            $more_products = array();

            for ($i = 0; $i < 3; $i++) {
                for (; $ids[$number] == $id;) $number = ++$number % $total_ids;

                $more_products[] = $this -> product_model -> get_producto_by_id($ids[$number++]);
            }

            require_once('php/views/ProductView.php');
        }

    }
