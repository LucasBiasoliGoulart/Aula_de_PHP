<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
</head>
<body>
    <?php

       $msg = "Meu primeiro arquivo em PHP";
       echo $msg;

       $nome = 'Lucas';
       $idade = '20';
       $salario = '150';
       $fichacompleta = $nome."-".$idade."-".$salario;
       echo "Meu nome é {$nome} - minha idade é {$idade} - meu salário é {$salario}";

    ?>
</body>
</html>