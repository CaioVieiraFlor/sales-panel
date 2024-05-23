<?php

require 'Controller.php';
require PATH_MODEL . '/PizzaModel.php';

class PizzaController extends Controller {
    public static function index() {
        $pizzaModel = new PizzaModel();
        $pizzas = $pizzaModel->getPizzas();

        require PATH_VIEW . 'pizza/index.php';
    }
}

PizzaController::index();