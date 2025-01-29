<?php
    require "config.php";
    session_start();

    if ($_SESSION['perfil'] != 'adm') {
        $sql = "SELECT * FROM chamados WHERE id_usuario = {$_SESSION['id']}";
    }else {
        $sql = "SELECT * FROM chamados";
    }

    $res = $conexao -> query($sql);
    $qtd = $res -> num_rows;

    $sql = "SELECT * FROM usuario";
    $resusuarios = $conexao->query($sql);
    $qtdsusuario = $resusuarios->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpDesk</title>
</head>
<body>
    <nav>
        <a href="./home.php"><img src="./Img/logo.png" alt="Logo"></a>
        <h1>HelpDesk</h1>
    </nav>
    <div class="consulta">
        <div class="card">
            <h2>Consulta de chamada</h2>
            <!--Rodando um fureach passando por todas os chamados-->
            <?php while($row = $res->fetch_object()) { ?>
            <div class="dados">
                <h5><?php echo $row -> titulo?></h5>
                <h6><?php echo $row -> categoria?></h6>
                <h6><?php echo $row -> descricao ?></h6>
                <h6>
                    <?php
                        $idchamada = $row -> id_chamados; 
                        $idusuario = $row -> id_usuario;
                        $resusuarios->data_seak(0); // Reinicia o ponteiro do resultado da consulta de usuário
                        while ($user = $resusuarios->fetch_object()) {
                            if ($user -> id_usuario = $idusuario) {
                                echo '<p style="color: green;">Usuário: ' . $user -> nome . '</p>';
                                break;
                            }
                        }
                    ?>
                </h6>
                <p><?php echo $row -> id_chamados ?></p>
            </div>
            <?php } ?>
            <a href="./home.php" class="voltar">Voltar</a>
        </div>
    </div>
    <style>
         *{
            margin: 0;
            padding: 0;
        }

        body{
            width: 100%;
            height: 100vh;
            font-family: arial;
            background-color: #EEEEEE;
        }

        nav{
            width: 100%;
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: left;
            background: black;
            color: white;
        }

        nav img{
            width: 50px;
            height: 50px;
            margin-left: 10px;
            margin-right: 10px;
        }

        nav h1{
            font-weight: 400;
        }

        .logo{
            width: 20%;
            display: flex;
            align-items: center;
        }

        /*-----Consulta-----*/
        .consulta{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card{
            width: 70%;
            padding: 19px 15px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.2);
        }

        .card h2{
            font-size: 27px;
            font-weight: 400;
            margin-bottom: 20px;
        }

        /*-----Dados-----*/
        .dados{
            width: 100%;
            border-radius: 7px;
            border: 1px solid gray;
            margin-bottom: 20px;
            margin-top: 10px;
        }

        h5, h6, p{
            font-size: 18px;
            margin-bottom: 5px;
            margin-top: 5px;
            margin-left: 10px;
            font-weight: 400;
        }

        /*-----Botão_de_voltar-----*/
        .voltar{
            padding: 10px 70px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            background-color: dodgerblue;
            font-size: 20px;
            color: black;
            text-decoration: none;
        }
    </style>
</body>
</html>