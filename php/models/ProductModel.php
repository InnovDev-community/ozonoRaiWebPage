<?php
    class ProductModel {

        private $conn;

        public function __construct() {
            $this -> conn = Connection::GET_CONNECTION();
        }

        public function get_products() {
            $products = array();

            if ($query = $this -> conn -> query("SELECT * FROM products")) {
                while ($row = $query -> fetch_assoc()) $products[] = $row;

                $query -> close();
            }

            return $products;
        }

        public function get_producto_by_id($id) {
            $product = NULL;

            if ($query = $this -> conn -> query("SELECT * FROM products WHERE id = $id")) {
                $product = $query -> fetch_assoc();

                $query -> close();
            }

            return $product;
        }

    }
