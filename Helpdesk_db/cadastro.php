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
        <a href="./index.php" class="link">VOLTAR</a>
    </nav>
        <div class="cadastro">
            <form action="validador_cadastro.php" method="GET">
                <h2>Cadastro</h2>
                <input type="text" name="nome" id="nome" placeholder="Nome completo" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <select name="perfil">
                    <option required>Selecionar</option>
                    <option>Adm</option>
                    <option>User</option>
                </select>

                <?php if (isset($_GET['validaperfil']) && $_GET['validaperfil'] == 'erro') { ?>
                    <div class="alert">Obrigatorio selecionar o perfil!</div>
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

        .cadastro{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form{
            width: 30%;
            padding: 20px 20px;
            border-radius: 10px;
            background-color: white;
            border: 1px solid gray;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.2);
        }

        h2{
            font-weight: 400;
            text-align: center;
            font-size: 40px;
        }

        input{
            width: 100%;
            height: 5vh;
            margin-bottom: 10px;
            background-color: #F3F3F3;
            border: 1px solid gray;
            color: black;
            border-radius: 5px;
            font-size: 15px;
            outline: none;
        }

        input::placeholder{
            color: black;
        }

        select{
            width: 100%;
            height: 5vh;
            text-align: center;
            color: black;
            margin-bottom: 10px;
            background-color: #F3F3F3;
            font-size: 15px;
            outline: none;
        }

        button{
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 7px;
            background-color: dodgerblue;
            cursor: pointer;
            font-size: 20px;
        }

        .alert{
            color: red;
            margin-bottom: 10px;
        }
    </style>
</body>
</html>