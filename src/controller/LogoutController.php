<?php

require 'Controller.php';

class LogoutController extends Controller {
    public static function index() {
        session_start();
        session_unset();
        session_destroy();

        header('Location: http://localhost/sales-panel/index.php');
        exit();
    }
}

LogoutController::index();