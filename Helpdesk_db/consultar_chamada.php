<?php
    $chamadas = [];

    $arquivo = fopen('./registro/registros.txt', 'r');
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
    <div class="consulta">
        <div class="card">
            <h2>Consulta de chamada</h2>
            <!--Rodando um fureach passando por todas os chamados-->
            <?php foreach($chamadas as $chamada) { ?>

                <?php $chamada_dados = explode('|', $chamada);

                    if (count($chamada_dados) < 6) {
                        continue;
                    }

                    if ($_SESSION['perfil'] === 'user') {
                        if ($chamada_dados[0] != $_SESSION['id']) {
                            continue;
                        }
                    }
                ?>
            <div class="dados">
                <h5><?php echo $chamada_dados[3]?></h5>
                <h6><?php echo $chamada_dados[4]?></h6>
                <h6><?php echo $chamada_dados[5] ?></h6>
                <p><?php echo '<p style="color: green;">Usuário: ' . $chamada_dados[2] . '</p>';?></p>
            </div>
            <?php } ?>
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
            background-color: #E1E1E1;
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
            width: 50%;
            padding: 10px 15px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.2);
        }

        .card h2{
            font-size: 27px;
            font-weight: 400;
        }

        /*-----Dados-----*/
        .dados{
            width: 100%;
            border-radius: 7px;
            border: 1px solid gray;
        }

        h5, h6, p{
            font-size: 18px;
            margin-bottom: 5px;
            margin-top: 5px;
            margin-left: 10px;
            font-weight: 400;
        }
    </style>
</body>
</html>