<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <h1>Desconto 10%</h1>
    <?php
        $preco = 10 / 100;
        echo "O valor do produto com desconto de 10% é: R$".number_format($preco, 2);
    ?>
</body>
</html>