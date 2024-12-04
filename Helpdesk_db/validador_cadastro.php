<?php
    include ('config.php');
    mysqli_query($conexao, 'CREATE DATABASE helpdesk');

    // Tabela
    mysqli_query($conexao, 'CREATE TABLE tb_dados(
        id int primary key auto_increment,
        nome varchar(50) not null,
        email varchar(50) not null,
        senha varchar(50) not null
    )');

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    if($_POST['perfil'] === '--Selecionar--') {
        header('location: cadastro.php?validaperfil=erro');
    }else {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $perfil = $_POST['perfil'];

        $sql = "INSERT INTO tb_dados(nome, email, senha, perfil) VALUES('{$nome}', '{$email}', '{$senha}', '{$perfil}')";

        $res = $conexao->query($sql);

        if ($res==true) {
            header('location: cadastro.php?usuario=sucesso');
        }else {
            header('location: cadastro.php?usuario=falha');
        }
    }
?>