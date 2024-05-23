<?php

require 'Controller.php';

class HomeController extends Controller {
    public static function index() {
        session_start();

        $nome = '';
        if (isset($_SESSION['nome'])) {
            $nome = $_SESSION['nome'];
        } 
        
        require PATH_VIEW . 'home/index.php';
    }
}

HomeController::index();