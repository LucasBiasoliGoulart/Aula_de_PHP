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

    for ($idx = 0; $idx < count($usuario); $idx++) {
        if ($email == $usuario[$idx]['email'] && $senha == $usuario[$idx]['senha']) {
            $usuarioAutenticado = true;
            $_SESSION['id'] = $usuario[$idx]['id'];
            $_SESSION['nome'] = $usuario[$idx]['nome'];
            $_SESSION['perfil'] = $usuario[$idx]['perfil'];
            break;
        }else {
            $usuarioAutenticado = false;
        }
    }

    if ($usuarioAutenticado) {
        // Validando a sessão
        $_SESSION['autenticado'] = 'sim';
        header('location: home.php');
    }else {
        // Validando a sessão
        $_SESSION['autenticado'] = 'nao';
        header('location: index.php?login=erro');
    }
?>