<?php
    session_start();

    $usuarios = array(
        ['id' => 1, 'perfil' => 'adm', 'nome' => 'Lucas', 'email' => 'helloworld@gmail.com', 'senha' => '1234'],
        ['id' => 2, 'perfil' => 'user', 'nome' => 'Gabriel', 'email' => 'hello24@gmail.com', 'senha' => '123'],
        ['id' => 3, 'perfil' => 'user', 'nome' => 'Felipe', 'email' => 'world24@gmail.com', 'senha' => '12345']
    );

    $usuarioAutenticado = false;
    
    $email = $_GET['email'];
    $senha = $_GET['senha'];

    for ($idx = 0; $idx < count($usuarios); $idx++) {
        if ($email == $usuarios[$idx]['email'] && $senha == $usuarios[$idx]['senha']) {
            $usuarioAutenticado = true;
            $_SESSION['id'] = $usuarios[$idx]['id'];
            $_SESSION['perfil'] = $usuarios[$idx]['perfil'];
            $_SESSION['nome'] = $usuarios[$idx]['nome'];
            break;
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