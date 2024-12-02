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
        <a href="./home.php" class="link">SAIR</a>
    </nav>
    <div class="principal">
        <div class="card">
            <form action="conf_editar_chamada.php" method="POST">
                <h2>Editar Chamada</h2>
                <div class="info">
                    <label>Ordem de serviço</label>
                    <input type="text" name="id" required disabled>
                </div>
                <div class="info">
                    <label>Titulo</label>
                    <input type="text" name="titulo" required>
                </div>
                <div class="info">
                    <label>Categoria</label>
                    <select name="categoria">
                        <option value="Criação Usuário">Criação Usuário</option>
                        <option value="Impressora">Impressora</option>
                        <option value="Hardware">Hardware</option>
                        <option value="Software">Software</option>
                        <option value="Rede">Rede</option>
                        <option value="Formatação">Formatação</option>
                    </select>
                </div>
                <div class="info">
                    <label>Descrição</label>
                    <textarea></textarea>
                </div>
                <a href="./chamadas.php">Cancelar</a>
                <button type="submit">Salvar</button>
            </form>
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
            margin-right: 30px;
        }

        /*-----Principal-----*/
        .principal{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /*-----Card-----*/
        .card{
            width: 40%;
            padding: 10px 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.3);
        }

        .card h2{
            font-size: 30px;
            font-weight: 400;
        }

        /*-----Info-----*/
        .info{
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .info input{
            width: 100%;
            height: 5vh;
            outline: none;
        }

        .info select{
            width: 50%;
            height: 5vh;
        }

        .info textarea{
            width: 100%;
            height: 20vh;
            outline: none;
        }
    </style>
</body>
</html>