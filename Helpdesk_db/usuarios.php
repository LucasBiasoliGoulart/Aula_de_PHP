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
    <?php // Usuário Deletado
        if(isset($_GET['delete']) && $_GET['delete'] === 'sucesso') { ?> 
            <script>alert('Usuário excluido!');</script>
    <?php } ?>
    <?php // Usuário editado
        if(isset($_GET['edicao']) && $_GET['edicao'] === 'sucesso') { ?>
            <script>alert('Usuário editado!');</script>
    <?php } ?>
    <div class="principal">
        <div class="container">
            <div class="titulo">
                <h1>Usuários</h1>
            </div>
            <br>
            <?php 
               $sql = "SELECT * FROM usuarios";
               //$res = $conexao -> query($sql);
               $qtd = $res -> num_rows;

               if ($qtd > 0) {
                    print "<table>";
                    print "<tr>";
                    print "<th>ID</th>";
                    print "<th>Usuário</th>";
                    print "<th>Email</th>";
                    print "<th>Perfil</th>";
                    print "<th>Editar</th>";
                    print "<th>Excluir</th>";
                    print "</tr>";

                    while ($row = $res -> fetch_object()) {
                        print "<tr>";
                        print "<td>" . $row -> id_usuario . "</td>";
                        print "<td>" . $row -> nome . "</td>";
                        print "<td>" . $row -> email . "</td>";
                        print "<td>" . $row -> perfil . "</td>";
                        print "<td> <button onclick=\"location.href='edit_usuario.php?id=". $row -> id_usuario ."';\"></button></td>";
                        print "<td> <button onclick=\"location.href='edit_usuario.php?id=". $row -> id_usuario ."';\"></button></td>";
                        print "</tr>";
                   }
                   print "</table>";
               }

            ?>
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

        /*-----Principal-----*/
        .principal{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container{
            width: 80%;
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.3);
        }

        /*-----Titulo-----*/
        .titulo{
            width: 100%;
            text-align: center;
        }

        .titulo h1{
            font-weight: 400;
            font-size: 50px;
        }
    </style>
</body>
</html>