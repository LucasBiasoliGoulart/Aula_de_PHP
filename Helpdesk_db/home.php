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
        <div class="links">
            <div class="titulo">
                <h1>Menu</h1>
            </div>
            <div class="cards">
                <div class="card">
                    <a href="./abrir_chamada.php"><img src="./Img/formulario_abrir_chamado.png"></a>
                    <p>Abrir</p>
                </div>
                <div class="card">
                    <a href="./consultar_chamada.php"><img src="./Img/formulario_consultar_chamado.png"></a>
                    <p>Consultar</p>
                </div>
                <div class="card">
                    <a href="#"><img src="./Img/editar-arquivo.png"></a>
                    <p>Editar</p>
                </div>
                <div class="card">
                    <a href="#"><img src="./Img/autorizacao.png"></a>
                    <p>Autorização</p>
                </div>
                <div class="card">
                    <a href="#"><img src="./Img/usuarios.png"></a>
                    <p>Usuários</p>
                </div>
                <div class="card">
                    <a href="#"><img src="./Img/relatorio.png"></a>
                    <p>Relatórios</p>
                </div>
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
            background-color: #EEEEEE;
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

        /*-----Links-----*/
        .links{
            width: 80%;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.2);
        }

        /*-----Titulo-----*/
        .titulo{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: left;
            border-bottom: 1px solid black;
        }

        .titulo h1{
            font-weight: 400;
            margin-left: 2%;
        }

        /*-----Cards----*/
        .cards{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            margin-top: 20px;
            gap: 2%;
        }

        .card{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .card img{
            width: 100%;
            height: 20vh;
        }

        .card p{
            font-size: 20px;
        }
    </style>
</body>
</html>