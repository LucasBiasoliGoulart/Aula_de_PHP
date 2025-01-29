<?php
    // Modelo
    class Funcionario() {
        // Atributos
        public $nome = null;
        public $idade = null;
        public $profissao = null;

        // Metodos
        function resumir() {
            return "$this->nome tem $this->idade anos, trabalha como $this->profissao";
        }

        function modificarIdade() {
            $this->idade = $idade;
        }

        function modificarNome() {
            $this->nome = $nome;
        }
    }

?>