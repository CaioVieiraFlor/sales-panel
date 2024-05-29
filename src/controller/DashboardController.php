<?php

require 'Controller.php';
require PATH_MODEL . '/DashboardModel.php';

class DashboardController extends Controller {
    public static function index() {
        session_start();

        $dashboardModel = new DashboardModel();
        $products = $dashboardModel->getProducts();

        $productNameFirst = isset($products[0]) ? $products[0]['nome'] : '';
        $productTotalSaleFirst = isset($products[0]) ? $products[0]['total_qtd'] : '';

        $productNameSecond = isset($products[1]) ? $products[1]['nome'] : '';
        $productTotalSaleSecond = isset($products[1]) ? $products[1]['total_qtd'] : '';
        
        $productNameThird = isset($products[2]) ? $products[2]['nome'] : '';
        $productTotalSaleThird = isset($products[2]) ? $products[2]['total_qtd'] : '';

        $productNameFourth = isset($products[3]) ? $products[3]['nome'] : '';
        $productTotalSaleFourth = isset($products[3]) ? $products[3]['total_qtd'] : '';

        $productNameFifth = isset($products[4]) ? $products[4]['nome'] : '';
        $productTotalSaleFifth = isset($products[4]) ? $products[4]['total_qtd'] : '';

        $productNameSixth = isset($products[5]) ? $products[5]['nome'] : '';
        $productTotalSaleSixth = isset($products[5]) ? $products[5]['total_qtd'] : '';
        
        require PATH_VIEW . 'dashboard/index.php';
    }

}

DashboardController::index();