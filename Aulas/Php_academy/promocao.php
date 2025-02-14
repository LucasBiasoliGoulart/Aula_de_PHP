<?php
// Promoção de propriedade de construtor
class Produtos {
    public string $nome = "";
    public float $valor = 0;

    public function __construct(string $nome, float $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

$produto = new Produtos("Notebook Dell", 35000);
echo "Produto: ".$produto->nome;
echo "<br>";
echo "Valor: R$ ".$produto->valor;
?>