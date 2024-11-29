<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpDesk - Cadastro</title>
</head>
<body>
    <nav>
        <img src="./Img/logo.png" alt="Logo">
        <h1>HelpDesk</h1>
    </nav>
        <div class="cadastro">
            <form action="validador_cadastro.php" method="POST">
                <h2>Cadastro</h2>
                <input type="text" name="nome" id="nome" placeholder="Nome completo">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <select name="selecionar">
                    <option>--Selecionar--</option>
                    <option>Administrador</option>
                    <option>Usuário</option>
                </select>
                <?php 
                    if (isset($_GET['validaperfil']) && $_GET['validaperfil'] == 'erro') { ?>
                        <div class="alert">Obrigatório selecionar um perfil!</div>
                <?php } ?>
                <?php
                    if (isset($_GET['usuario']) && $_GET['usuario'] === 'sucesso') { ?>
                       <script>alert('Usuário cadastrado com sucesso!');</script>
                <?php }else if(isset($_GET['usuario']) && $_GET['usuario'] != 'sucesso') { ?>
                       <script>alert('Erro ao inserir usuário no banco, contate o administrador!');</script>
                <?php } ?>
                <button type="submit">Cadastre-se</button>
            </form>
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

        .cadastro{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form{
            width: 30%;
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            border: 1px solid gray;
        }

        h2{
            font-weight: 400;
            text-align: center;
            font-size: 40px;
        }

        input{
            width: 98%;
            height: 5vh;
            margin-bottom: 10px;
            background-color: #F3F3F3;
            border: 1px solid gray;
            color: black;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
        }

        input::placeholder{
            color: black;
        }

        select{
            width: 99%;
            height: 5vh;
            text-align: center;
            background-color: #C1C1C1;
            color: black;
            margin-bottom: 10px;
        }

        button{
            width: 99%;
            height: 50px;
            border: none;
            border-radius: 5px;
            background-color: dodgerblue;
            cursor: pointer;
            font-size: 20px;
        }

        .alert{
            color: red;
        }
    </style>
</body>
</html>