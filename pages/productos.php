<?php
    /* require_once('../php/Connection.php');
    require_once('../php/models/ProductModel.php');
    require_once("../php/controllers/ProductController.php"); */

    require_once('php/Connection.php'); /* <----- Cambio */
    require_once('php/models/ProductModel.php'); /* <----- Cambio */
    require_once("php/controllers/ProductController.php"); /* <----- Cambio */

    $product_controler = new ProductController();
    $product_controler -> all_products();
