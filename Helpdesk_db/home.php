<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpDesk</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="./Img/logo.png" alt="Logo">
            <h1>HelpDesk</h1>
        </div>
        <a href="./logoff.php" class="link">SAIR</a>
    </nav>
    <div class="home">
        <div class="cards">
            <div class="card">
                <a href="./abrir_chamada.php"><img src="./Img/formulario_abrir_chamado.png"></a>
                <p>Abrir Chamado</p>
            </div>
            <div class="card">
                <a href="#"><img src="./Img/formulario_consultar_chamado.png"></a>
                <p>Consultar Chamado</p>
            </div>
            <div class="card">
                <a href="#"><img src="./Img/autorizacao.png"></a>
                <p>Autorização</p>
            </div>
            <div class="card">
                <a href="#"><img src="./Img/editar-arquivo.png"></a>
                <p>Editar Arquivo</p>
            </div>
        </div>
    </div>
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
            justify-content: space-between;
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

        .link{
            text-decoration: none;
            font-size: 20px;
            color: white;
            margin-right: 30px
        }

        .home{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cards{
            width: 90%;
            height: 60vh;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.2);
            gap: 10px;
        }

        .card{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-radius: 10px;
            border: 1px solid black;
            padding: 10px;
            background-color: white;
        }

        .card p{
            font-size: 20px;
        }
    </style>
</body>
</html>