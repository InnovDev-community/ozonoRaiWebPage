<?php
    class ProductModel {

        private $conn;

        public function __construct() {
            $this -> conn = Connection::GET_CONNECTION();
        }

        public function __destruct() {
            $this -> conn -> close();
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

        public function get_ids() {
            $ids = array();

            if ($query = $this -> conn -> query("SELECT id FROM products")) {
                while ($row = $query -> fetch_assoc()) $ids[] = $row['id'];

                $query -> close();
            }

            return $ids;
        }

    }
