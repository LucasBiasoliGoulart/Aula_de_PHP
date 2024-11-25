<?php
    session_start();

    $usuarios = array(
        ['id' => 1, 'email' => 'helloworld@gmail.com', 'senha' => '1234'],
        ['id' => 2, 'email' => 'hello24@gmail.com', 'senha' => '123']
    );

    $usuarioAutenticado = false;
    
    $email = $_GET['email'];
    $senha = $_GET['senha'];

    for ($idx = 0; $idx < count($usuarios); $idx++) {
        if ($email == $usuarios[$idx]['email'] && $senha == $usuarios[$idx]['senha']) {
            $usuarioAutenticado = true;
            break;
            $_SESSION['user_id'] = $usuarios[$idx]['id'];
        }else {
            $usuarioAutenticado = false;
        }
    }

    if ($usuarioAutenticado) {
        $_SESSION['autenticado'] = 'sim';
        header('location: home.php');
    }else {
        $_SESSION['autenticado'] = 'nao';
        header('location: index.php?login=erro');
    }
?>