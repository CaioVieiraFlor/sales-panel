<?php

require '../../../config.php';

$sql = "select * from pizza";
$sql = $pdo->query($sql);