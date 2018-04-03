<?php
    class Connection {

        public static function GET_CONNECTION() {
            $conn = new mysqli(HOST, USER, PASSWORD, DATA_BASE);

            $conn -> query("SET NAMES utf8");

            return $conn;
        }

    }
