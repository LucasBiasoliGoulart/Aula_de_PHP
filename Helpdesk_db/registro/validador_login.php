<?php 
    session_start();

    $usuario = array(
        ['id' => 1, 'perfil' => 'adm', 'nome' => 'Lucas', 'email' => 'helloworld24@gmail.com', 'senha' => '123'],
        ['id' => 2, 'perfil' => 'user', 'nome' => 'Felipe', 'email' => 'world25@gmail.com', 'senha' => '1234'],
        ['id' => 3, 'perfil' => 'user', 'nome' => 'Gustavo', 'email' => 'hello23@gmail.com', 'senha' => '12345']
    );

    $usuarioAutenticado = false;

    $email = $_GET['email'];
    $senha = md5($_GET['senha']);

    // Buscando as informações no banco
    $sql = "SELECT * FROM usuario where email='{$email}'";
    $res = $conexao->query($sql);
    $row = $res->fetch_object();

    // Autenticando usuario
    if ($email == $row->email && $senha == $row->senha) {
        $usuarioAutenticado = true;
        $_SESSION['id'] = $row->id_usuario;
        $_SESSION['perfil'] = $row->perfil;
        $_SESSION['nome'] = $row->nome;
    }else {
        $usuarioAutenticado = false;
    }

    if ($usuarioAutenticado) {
        $_SESSION['autenticado'] = 'sim';
        header('location: home.php');
    }else {
        $_SESSION['autenticado'] = 'nao';
        header('location: index.php?login=erro');
    }
?>