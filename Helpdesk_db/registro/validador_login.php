<?php 
    session_start();

    $usuario = array(
        ['id' => 1, 'perfil' => 'adm', 'nome' => 'Lucas', 'email' => 'helloworld24@gmail.com', 'senha' => '123'],
        ['id' => 2, 'perfil' => 'user', 'nome' => 'Felipe', 'email' => 'world25@gmail.com', 'senha' => '1234'],
        ['id' => 3, 'perfil' => 'user', 'nome' => 'Gustavo', 'email' => 'hello23@gmail.com', 'senha' => '12345']
    );

    $usuarioAutenticado = false;

    // Recebendo os dados via método GET
    $email = $_GET['email'];
    $senha = $_GET['senha'];
?>