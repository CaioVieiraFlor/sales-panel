<?php

require 'Controller.php';
require PATH_MODEL . '/SaleModel.php';

class SaleController extends Controller {
    public static function index() {
        $saleModel = new SaleModel();
        $sales = $saleModel->getSales();

        require PATH_VIEW . 'sale/index.php';
    }
}

SaleController::index();