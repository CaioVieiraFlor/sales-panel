<?php

require 'Controller.php';
require PATH_MODEL . '/DashboardModel.php';

class DashboardController extends Controller {
    public static function index() {
        session_start();

        $dashboardModel = new DashboardModel();
        $products = $dashboardModel->getProducts();
        
        require PATH_VIEW . 'dashboard/index.php';
    }

}

DashboardController::index();