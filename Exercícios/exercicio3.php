<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <?php
        $max = PHP_FLOAT_MAX;
        $min = PHP_FLOAT_MIN;

        while (true) {
            $input = (float)readline("Digite um número (0 para terminar): ");

            if($input == 0) {
                break;
            }

            if($input < $min) {
                $min = $input;
            }

            if($input > $max) {
                $max = $input;
            }
        }

        if ($min == PHP_FLOAT_MIN && $max == PHP_FLOAT_MAX) {
            echo "Nenhum número foi digita. \n";
        }else {
            echo "O número menor:" .$min. "\n";
            echo "O número maior:" .$max. "\n";
        }
    ?>
</body>
</html>