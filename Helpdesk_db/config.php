<?php 
    //require_once 'validador_acesso.php';

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'helpdesk');

    // Criar uma string de conexão
    $conexao = new mysqli(HOST, USER, PASS, BASE);
?>