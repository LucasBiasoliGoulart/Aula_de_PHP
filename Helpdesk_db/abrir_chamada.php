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
    <div class="chamada">
        <div class="card">
            <h2>Abertura de Chamada</h2>
            <div class="dados">
                <label>Titulo</label>
                <input type="text" name="titulo" placeholder="Titulo" require>
            </div>
            <div class="dados">
            <label>Categoria</label>
                <select>
                    <option>Selecione uma opção!</option>
                    <option>Criação Usuário</option>
                    <option>Impressora</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Rede</option>
                    <option>Formatação</option>
                </select>
            </div>
            <div class="dados">
                <label>Descrição</label>
                <textarea name="" id=""></textarea>
            </div>
            <div class="botoes">
                <a href="./home.php">Voltar</a>
                <button type="submit" class="enviar">Enviar</button>
            </div>
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

        /*-----Chamada-----*/
        .chamada{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card{
            width: 50%;
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.2);
        }

        .card h2{
            font-size: 36px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        /*-----Dados-----*/
        .dados{
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: left;
        }

        label{
            font-size: 27px;
        }

        input{
            width: 85%;
            height: 5vh;
            outline: none;
            border-radius: 5px;
            font-size: 15px;
            color: black;
            padding: 0px 10px;
            border: 1px solid gray;
        }

        input::placeholder{
            color: black;
        }
        
        select{
            width: 30%;
            height: 4vh;
            border-radius: 5px;
        }

        textarea{
            width: 94%;
            height: 20vh;
            padding: 10px;
            font-size: 20px;
        }

        /*-----Botões-----*/
        .botoes a, button{
            padding: 10px 70px;
            border: none;
            text-decoration: none;
            background-color: dodgerblue;
            color: black;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .enviar{
            background-color: gold;
        }
    </style>
</body>
</html>