<?php
// Modelo
class Funcionario {
    // Atributos
    public $nome = null;
    public $idade = null;
    public $profissao = null;

    // Metodos
    function resumirFunc() {
        return "$this->nome tem $this->idade anos, trabalha como $this->profissao";
    }

    function alterarAtributos($nome, $idade, $profissao) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }
}

$func = new Funcionario;
$func2 = new Funcionario;

$func -> alterarAtributos('Gabriel', '30', 'Programador');
$func2 -> alterarAtributos('Julia', '28', 'Médica');

echo $func -> resumirFunc();
echo "<hr/>";
echo $func2 -> resumirFunc();  
?>