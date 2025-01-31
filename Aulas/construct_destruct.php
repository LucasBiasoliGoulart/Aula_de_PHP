<?php
// Modelo
class Empresas {
    // Atributos
    public $nome = null;

    // Iniciando objeto com atributo
    function __construct($nome) {
        echo "Objeto iniciado: <br/>";
        $this->nome = $nome;
    }

    function __destruct() {
        echo "<br/> Objeto removido";
    }

    // Métodos
    function __get($atributo) {
        return $this->$atributo;
    }

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function correr() {
        return "<br/>".$this->__get('nome')." está correto";
    }
}

$empresa = new Empresas("Microsoft");
echo "<br/> Nome: ".$empresa->__get('nome');
echo $empresa->correr();

$empresa->__set("nome","Facebook");
echo "<br/><br/> Nome atualizado: ".$empresa->__get('nome');
echo $empresa->correr();
echo "<br/>";
unset($empresa);
?>