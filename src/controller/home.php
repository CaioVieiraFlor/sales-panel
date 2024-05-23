<?php
// Conexão com o BD
require '../../../config.php';


session_start();

$nome = '';
if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
}