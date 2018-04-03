<?php
    require_once('php/Connection.php');
    require_once('php/models/ProductModel.php');
    require_once('php/controllers/ProductController.php');

    $product_controler = new ProductController();
    $product_controler -> all_products();
