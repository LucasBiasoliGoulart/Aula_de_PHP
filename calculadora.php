<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>
    <h1>Calculadora IMC</h1>
    <form action="calculadora.php" method="post">
        <label for="peso">Peso (KG):</label>
        <input type="text" id="peso" name="peso"><br>
        <label for="altura">Altura (M):</label>
        <input type="text" id="altura" name="altura"><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            if (is_numeric($peso) && is_numeric($altura) && $altura > 0) {
                $imc = $peso / ($altura * $altura);
                echo "<h2>Seu IMC é: ". number_format($imc, 2) ."</h2>";

                if ($imc < 18.5) {
                    echo "<p>Você está abaixo do peso.</p>";
                }else if ($imc < 24.9) {
                    echo "<p>Você está com peso normal.</p>";
                }else if ($imc < 29.9) {
                    echo "<p>Você está com sobrepeso.</p>";
                }else {
                    echo "<p>Você está com obesidade.</p>";
                }
            }else {
                echo "<p>Por favor, insira valores validos.</p>";
            }
        }
    ?>
</body>
</html>