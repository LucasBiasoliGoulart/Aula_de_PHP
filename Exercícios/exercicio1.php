<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php
        function isPrime($num) {
            if ($num < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        for ($i = 1; $i <= 100; $i++) {
            if (isPrime($i)) {
                echo $i. "";
            }
        }
    ?>
</body>
</html>