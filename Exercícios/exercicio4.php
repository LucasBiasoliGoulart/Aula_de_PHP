<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" placeholder="Digite um número" required>
        <button type="submit">Mostrar tabuada</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = (int)$_POST['numero'];
            echo "<h2>Tabuada de $numero</h2>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero X $i = $resultado</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>