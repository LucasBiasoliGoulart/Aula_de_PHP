<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpDesk</title>
</head>
<body>
    <nav>
        <img src="./Img/logo.png" alt="Logo">
        <h1>HelpDesk</h1>
    </nav>
    <div class="login">
        <form action="index.php" method="POST">
            <h2>Login</h2>
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <button>login</button>
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

        .login{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form{
            width: 30%;
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border: 1px solid black;
        }

        h2{
            text-align: center;
            font-size: 50px;
            font-weight: 400;
        }

        input{
            width: 100%;
            height: 50px;
            border: 1px solid gray;
            border-radius: 10px;
            margin-bottom: 25px;
            background-color: #F3F3F3;
        }

        button{
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 5px;
            background-color: dodgerblue;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</body>
</html>