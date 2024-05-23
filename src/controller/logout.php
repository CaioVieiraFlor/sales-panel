<?php
require '../../config/constants.php';

session_start();
session_unset();
session_destroy();

header('Location: http://localhost/sales-panel/index.php');
exit();