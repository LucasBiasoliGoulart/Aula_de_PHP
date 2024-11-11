<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <form method="post">
        <?php for ($i = 1; $i <= 10; $i++) ?>  
        <h3>Entrevistado <?= $i ?></h3>
        <label for="sexo<?= $i ?>">Sexo (M/F):</label>
        <input type="text" name="sexo<?= $i ?>" id="sexo<?= $i ?>" required pattern="[MFmf]"><br>
        <label for="responta<?= $i ?>">Responta (S/N):</label>
        <input type="text" name="responta<?= $i ?>" id="responta<?= $i ?>" required pattern="[SNsn]"><br>
        <button type="submit">Enviar</button>
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalSim = 0;
            $totalNao = 0;
            $homens = 0;
            $mulheres = 0;
            $homensNao = 0;
            $mulheresNao = 0;

            for($i = 1; $i <= 10; $i++) {
                $sexo = strtoupper($_POST["sexo$i"]);
                $resposta = strtoupper($_POST["resposta$i"]);

                if ($resposta == 'S') {
                    $totalSim++;
                }else {
                    $totalNao++;
                    if ($sexo == 'M') {
                        $homensNao++;
                    }else {
                        $mulheresNao++;
                    }
                }

                if ($sexo == 'M') {
                    $homens++;
                }else {
                    $mulheres++;
                }
            }

            $porcentagemHomensNao = $homens > 0 ? ($homensNao / $homens) * 100 : 0;
            $porcentagemMulheresNao = $mulheres > 0 ? ($mulheresNao / $mulheres) * 100 : 0;

            echo "<h2>Resultado da Pesquisa</h2>";
            echo "Número de pessoa que responderam Sim: $totalSim <br>";
            echo "Número de pessoa que responderam Não: $totalNao <br>";
            echo "Porcentagem de homens que respondeu Não: $porcentagemHomensNao <br>";
            echo "Porcentagem de mulheres que respondeu Não: $porcentagemMulheresNao <br>";

        }
    ?>
</body>
</html>