<?php

require './classes.php';

// Receber os Dados do index
$nome = $_GET['nome'];
$classe = $_GET['classe'];
$tipo = $_GET['tipo'];

if ($classe === 'Guerreiro') {
    $personagem = new Guerreiro();
}else if ($classe === 'Mago') {
    $personagem = new Mago();
}else if ($classe === 'Ninja') {
    $personagem = new Ninja();
}else if ($classe === 'Arqueiro') {
    $personagem = new Arqueiro();
}else if ($classe === 'Pirata') {
    $personagem = new Pirata();
}

// Setando os valores
$personagem->__set('classe', $classe);
$personagem->__set('tipo', $tipo);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
    <div class="card">
        <form action="./personagem.php" method="GET">
        <h1>Personagem</h1>
        <div class="class">
            <label>Nome: <?php echo $nome; ?></label>
        </div>
        <div class="info" style="margin-bottom: 10px;">
            <p><?php echo "<strong>Classe: <strong/>{$personagem->__get('classe')}";?></p>
            <p><?php echo "<strong>Tipo: <strong/>{$personagem->__get('tipo')}";?></p>
            <p><?php echo "<strong>Descrição: <strong/>{$personagem->__get('descricao')}";?></p>
        </div>
        <div class="info" style="margin-bottom: 10px;">
            <h4>Atributos</h4>
            <p><?php echo "Vida: {$personagem->__get('vida')}";?></p>
            <p><?php echo "Força: {$personagem->__get('forca')}";?></p>
            <p><?php echo "Defesa: {$personagem->__get('defesa')}";?></p>
            <p><?php echo "Esquiva: {$personagem->__get('esquiva')}";?></p>
            <p><?php echo "Velocidade: {$personagem->__get('velocidade')}";?></p>
            <p><?php echo "Inteligência: {$personagem->__get('inteligencia')}"?></p>
        </div>
        <div class="info" style="margin-bottom: 10px;">
            <h4>Ações</h4>
            <p><?php echo $personagem->ataqueComum();?></p>
            <p><?php echo $personagem->defender();?></p>
            <p><?php echo $personagem->esquivar();?></p>
            <p><?php echo $personagem->fugir();?></p>
            <p><?php echo $personagem->ataqueEspecial();?></p>
        </div>
        <button type="submit" href='./index.html'>Voltar</button>
        </form>
    </div>
</body>
</html>