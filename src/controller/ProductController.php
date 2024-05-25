<?php

require 'Controller.php';
require PATH_MODEL . '/ProductModel.php';

class ProductController extends Controller {
    public static function index() {
        $productModel = new ProductModel();
        $products = $productModel->getProducts();

        require PATH_VIEW . 'product/index.php';
    }
}

ProductController::index();