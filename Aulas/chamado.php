<?php
// Modelo
class Produtos {
    // Atributos
    public $nome = null;
    public $preco = null;

    // Métodos
    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }

    function escrever() {
        return $this->__get('nome')." custa "."R$:".$this->__get('preco');
    }
}

// Instanciando os objetos
$compra = new Produtos;
$compra->__set("nome","Tomate");
$compra->__set("preco","50,00");

echo $compra->escrever();
?>