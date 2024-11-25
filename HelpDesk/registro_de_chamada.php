<?php
    $titulo = str_replace('|', '-', $_POST['titulo']);
    $categoria = str_replace('|', '-', $_POST['categoria']);
    $descricao = str_replace('|', '-', $_POST['descricao']);
    $user_id = str_replace('|', '-', $_SESSION['id']);

    $dados = $titulo. '|' . $categoria . '|' . $descricao . PHP_EOL;

    $arquivo = fopen('chamada.txt', 'a');

    fwrite($arquivo, $dados);

    fclose($arquivo);

    header('location: abrir_chamada.php?cadastro=efetuado');
?>