<?php
    $titulo = str_replace('|', '-', $_POST['titulo']);
    $categoria = str_replace('|', '-', $_POST['categoria']);
    $descricao = str_replace('|', '-', $_POST['descricao']);

    $dados = $titulo. '|' . $categoria . '|' . $descricao . PHP_EOL;

    $arquivo = fopen('registro.hd', 'a');

    fwrite($arquivo, $dados);

    fclose($arquivo);

    header('location: abrir_chamada.php?cadastro=efetuado');
?>