<?php
abstract class Classes {
    // Atributos
    public $forca, $defesa, $velocidade, $inteligencia, $vida, $classe, $tipo, $descricao;

    // Métodos
    public function ataqueComum(){echo('Ataque Comum (20) <br>');}
    public function defender(){echo('Defender (50)');}
    public function esquivar(){echo('Esquivar (30)');}
    public function fugir(){echo('Fugir (-10)');}

    public function __set($atributos, $valor) {
        $this->$atributos = $valor;
    }

    public function __get($atributos) {
        return $this -> $atributos;
    }
}

// Classes filhas da classe
class Guerreiro extends Classes {
    public $forca = 100;
    public $defesa = 70;
    public $esquiva = 70;
    public $valocidade = 75;
    public $inteligencia = 40;
    public $vida = 90;
    public $descricao = 'Um combatente robusto, especializado em armaduras pesadas e armas de combate corpo a corpo.';

    public function ataqueEspecial() {
        echo 'Espada Flamejante (70) <br>';
        echo 'Corte profundo (50)';
    }
}

class Mago extends Classes {
    public $forca = 30;
    public $defesa = 50;
    public $esquiva = 40;
    public $velocidade = 47;
    public $inteligencia = 70;
    public $vida = 120;
    public $descricao = 'Um conjurador de feitiços poderosos, capaz de manipular os elementos e invocar magia arcana.';

    public function ataqueEspecial() {
        echo 'Fúria do Dragão (70)';
        echo 'Energia estelar (50)';
    }
}

class Arqueiro extends Classes {
    public $forca = 40;
    public $defesa = 70;
    public $esquiva = 90;
    public $velocidade = 90;
    public $inteligencia = 60;
    public $vida = 70;
    public $descricao = 'Um mestre do arco e flecha, ágil e preciso, que ataca de longe com destreza.';

    public function ataqueEspecial() {
        echo 'Felcha de gelo (70) <br/>';
        echo 'Alvo perfurante (50)';
    }
}

class Ninja extends Classes {
    public $forca = 50;
    public $defesa = 53;
    public $esquiva = 80;
    public $velocidade = 80;
    public $inteligencia = 90;
    public $vida = 70;
    public $descricao = 'Um guerreiro furtivo e letal, treinado em técnicas de assassinato e habilidades de camuflagem.';

    public function ataqueEspecial() {
        echo 'Ataque rápido (50)<br>';
        echo 'Lâmina ardente (70)';
    }
}

class Pirata extends Classes {
    public $forca = 80;
    public $defesa = 40;
    public $esquiva = 40;
    public $velocidade = 70;
    public $inteligencia = 70;
    public $vida = 110;
    public $descricao = 'Um aventureiro audacioso dos mares, que busca tesouros e vive pela liberdade, sempre pronto para a batalha.';

    public function ataqueEspecial() {
        echo 'Lâmina cortante (50)<br>';
        echo 'Maldição do esqueleto (70)';
    }
}
?>