<?php

@require $_SERVER['DOCUMENT_ROOT'] . '/sales-panel/config/constants.php';

abstract class Controller {
    abstract public static function index();
}