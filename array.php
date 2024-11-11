<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC com Array</title>
</head>
<body>
    <form action="array.php">
        <h1>Calculadora IMC</h1>
        <label for="peso">Peso (KG):</label>
        <input type="text" id="peso" name="peso"><br>
        <label for="altura">Altura (M):</label>
        <input type="text" id="altura" name="altura"><br>
        <label for="masculino"><input type="radio" name="genero" id="genero">Masculino</label>
        <label for="feminino"><input type="radio" name="genero" id="genero">Feminino</label><br>
        <input type="submit" value="Calcular">
        <?php
        function calcularImc($dados) {
            $peso = $dados['peso'];
            $altura = $dados['altura'];
            $genero = $dados['genero'];
            $imc = $peso / ($altura * $altura);

            if ($imc < 18.5) {
                $categoria = "Abaixo do peso";
            }else if ($imc >= 18.5 && $imc < 24.9) {
                $categoria = "Peso normal";
            }else if ($imc >= 25 && $imc < 29.9) {
                $categoria = "Sobrepeso";
            }else {
                $categoria = "Obesidade";
            }

            if ($genero == 'masculino') {
                $mensagem = "O Imc do homem é: ".$imc."ele está".$categoria;
            }else if ($genero == 'feminino') {
                $mensagem = "O Imc da mulher é: ".$imc." ela está ".$categoria;
            }else {
                $mensagem = "O Imc é: ".$imc." a pessoa está ".$categoria;
            }
            return $mensagem;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dados = array(
                'peso' => $_POST['peso'],
                'altura' => $_POST['altura'],
                'genero' => $_POST['genero']
            );

            $mensagem = calcularImc($dados);
            echo $mensagem;
        }
        ?>
    </form>
</body>
</html>