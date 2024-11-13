<?php 
    require 'validador_de_acesso.php';
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
    <div class="chamado">
        <div class="card">
            <div class="titulo">
                <h1>Abertura de chamado
                <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] === 'efetuado') { ?>
                    <div style='color: green;'>
                        <script>
                            alert('Chamada do cadastro com sucesso!')
                        </script>
                    </div>
                <?php } ?>
                </h1>
            </div>
            <form action="registro_de_chamada" method="POST">
                <div class="titulo2">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" placeholder="Titulo">
                </div>
                <div class="categoria">
                    <label for="categoria">Categoria</label>
                    <select name="categoria">
                        <option>Criação de Usuário</option>
                        <option>Empressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                    </select>
                </div>
                <div class="descricao">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao"></textarea>
                </div>
                <div class="links">
                   <div class="buttons">
                        <button><a href="./home.php">Voltar</a></button>
                        <button type="submit">Abrir</button>
                   </div>
                </div>
            </form>
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

        .chamado{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card{
            width: 60%;
            border-radius: 10px;
            background-color: white;
        }

        .titulo{
            width: 100%;
        }

        .titulo h1{
            font-size: 40px;
            font-weight: 400;
            margin-left: 10px;
        }

        .titulo2, .categoria, .descricao, .links{
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        label{
            font-size: 25px;
        }

        input{
            width: 98%;
            height: 30px;
            padding: 5px;
            font-size: 15px;
        }

        select{
            width: 50%;
            height: 40px;
            padding: 5px;
        }

        textarea{
            width: 99%;
            height: 17vh;
            font-size: 15px;
        }

        .buttons{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        a{
            text-decoration: none;
            color: black;
        }

        button{
            width: 50%;
            height: 50px;
            font-size: 20px;
            border: none;
            border-radius: 5px;
            background-color: dodgerblue;
            cursor: pointer;
        }
    </style>
</body>
</html>