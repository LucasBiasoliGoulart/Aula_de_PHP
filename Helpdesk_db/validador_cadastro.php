<?php
    include ('config.php');
    
    // Verificar se o email está cadastrado
    $sql = "SELECT * FROM usuario where email = '{$_POST['email']}'";
    $res = $conexao->query($sql);

    if($res->num_rows > 0) {
        header('location: cadastro.php?email=erro');
        exit();
    }

    // Valida se a opção foi selecionada
    if($_POST['perfil'] === "Selecionar") {
        header('location: cadastro.php?validaperfil=erro');
        exit();
    }else {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $perfil = $_POST['perfil'];

        $sql = "INSERT INTO usuario(nome, email, senha, perfil) values ('{$nome}', '{$email}', '{$senha}', '{$perfil}')";
        //$res = $conexao->query($sql);

        if($res == true) {
            header('location: index.php?usuario=sucesso');
        }else {
            header('location: cadastro.php?usuario=falho');
        }
    }
?>