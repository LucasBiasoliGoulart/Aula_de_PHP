<?php
    include ('config.php');
    mysqli_select_db($conexao, 'helpdesk');
    mysqli_query($conexao, 'CREATE DATABASE IF NOT EXISTS helpdesk');

    // Tabela
    mysqli_query($conexao, 'CREATE TABLE tb_dados(
        id int primary key auto_increment,
        nome varchar(50) not null,
        email varchar(50) not null,
        senha varchar(50) not null,
        perfil varchar(50) not null
    )');

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    // Verificar se o campo 'Perfil' está presente e valido
    if(!isset($_POST['perfil']) || $_POST['perfil'] === '--Selecionar--') {
        header('location: cadastro.php?validaperfil=erro');
        exit;
    }

    // Sanitização dos dados enviados
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $perfil = mysqli_real_escape_string($conexao, $_POST['perfil']);

    // Insere os dados no banco
    $sql = "INSERT INTO tb_dados(nome, email, senha, perfil) VALUES ('{$nome}', '{$email}', '{$senha}', '{$perfil}')";
    $res = mysqli_query($conexao, $sql);

    if ($res) {
        header('location: cadastro.php?usuario=sucesso');
    }else {
        header('location: cadastro.php?usuario=falho');
    }
?>