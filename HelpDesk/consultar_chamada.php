<?php 
    require 'validador_de_acesso.php';

    $chamadas = [];

    $arquivo = fopen('registro.hd', 'r');

    while (!feof($arquivo)) {
        $registro = fgets($arquivo);
        $chamadas[] = $registro;
    }

    fclose($arquivo);
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
    <form action="#">
        <div class="consulta">
            <div class="card">
                <h2>Consulta de Chamada</h2>
                <?php foreach($chamadas as $chamado) { ?>
                <?php
                    $chamado_de_dados = explode('|', $chamado);

                    if (count($chamado_de_dados) < 3) {
                        continue;
                    }
                ?>
                <div class="textos">
                    <h3> <?php echo $chamado_de_dados[0] ?></h5>
                    <h4> <?php echo $chamado_de_dados[1] ?></h6>
                    <p> <?php echo $chamado_de_dados[2] ?></p>
                </div>
                <a href="./home.php" class="voltar">Voltar</a>
            </div>
            <?php } ?>
        </div>
    </form>
    <style>
        body{
            width: 100%;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: arial;
            background-color: #E1E1E1;
        }
        nav{
            width: 100%;
            height: 10vh;
            display: flex;
            align-items: center;
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

        .consulta{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card{
            width: 50%;
            padding: 17px 10px;
            border-radius: 10px;
            background-color: white;
        }

        h2{
            font-size: 30px;
            margin-left: 10px;
            font-weight: 400;
        }

        .textos{
            width: 97%;
            margin-bottom: 30px;
            margin-left: 10px;
        }

        .voltar{
            margin-left: 10px;
            padding: 10px 50px;
            border-radius: 10px;
            background-color: dodgerblue;
        }

        h3, h4, p{
            padding: 7px;
            font-weight: 400;
            background-color: #ECECEC;
        }

        a{
            text-decoration: none;
            color: black;
        }
    </style>
</body>
</html>