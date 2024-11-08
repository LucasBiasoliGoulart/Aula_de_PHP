<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>
    <form action="calculadora.php" method="post">
        <h1>Calculadora IMC</h1>
        <label for="peso">Peso (KG):</label>
        <input type="text" id="peso" name="peso"><br>
        <label for="altura">Altura (M):</label>
        <input type="text" id="altura" name="altura"><br>
        <input type="submit" value="Calcular" class="botao">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];

                if (is_numeric($peso) && is_numeric($altura) && $altura > 0) {
                    $imc = $peso / ($altura * $altura);
                    echo "<h2 style='font-weight: 400'>Seu IMC é: ". number_format($imc, 2) ."</h2>";

                    if ($imc < 18.5) {
                        echo "<p style='font-size: 20px'>Você está abaixo do peso.</p>";
                    }else if ($imc < 24.9) {
                        echo "<p style='font-size: 20px'>Você está com peso normal.</p>";
                    }else if ($imc < 29.9) {
                        echo "<p style='font-size: 20px'>Você está com sobrepeso.</p>";
                    }else {
                        echo "<p style='font-size: 20px'>Você está com obesidade.</p>";
                    }
                }else {
                    echo "<p style='font-size: 20px'>Por favor, insira valores validos.</p>";
                }
            }
        ?>
    </form>
    <style>
        body{
            width: 100%;
            height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #E9E9E9;
        }

        h1{
            font-size: 50px;
            font-weight: 400;
            text-align: center;
        }

        form{
            width: 30%;
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.3);
        }

        input{
            width: 98%;
            height: 40px;
            margin-bottom: 20px;
        }

        .botao{
            height: 50px;
            width: 100%;
            border: none;
            background-color: #2EC7FF;
            font-size: 20px;
            cursor: pointer;
            margin-bottom: 0px;
        }
    </style>
</body>
</html>