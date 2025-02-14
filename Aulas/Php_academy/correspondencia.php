<?php
// Correspondência de Expressão
$retorno = match ($busca) {
    '1' => 'Encontrou o texto 1',
    1 => 'Encontrou o número 1',
    10, 20, 30 => 'Encontrou o número 10, 20 ou 30',
    default => 'Retorno se nenhuma condição for satisfeita'
};
?>