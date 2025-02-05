<?php
class Pai {
    private $nome = 'Jonathan';
    protected $sobrenome = 'Oliveira';
    public $humor = 'Feliz';

    public function __get($atr) {
        return $this->$atr;
    }

    public function __set($atr, $valor) {
        $this->$atr = $valor;
    }

    private function executarMania() {
        echo 'Assobiar';
    }

    private function responder() {
        echo 'Oi';
    }

    public function executarAcao() {
        $x = rand(1, 10);

        if ($x >= 1 && $x <= 8) {
            $this->executarMania();
        }else {
            $this->responder();
        }
    }
}

class Filho extends Pai {
    public function __construct() {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    private function executarMania() {
        echo 'Cantar';
    }

    public function x() {
        $this->executarMania();
    }

    protected function responder() {
        echo 'Olá';
    }
}

$filho = new Filho();
echo '<pre>';
print_r($filho);
echo '</pre>';

//$filho->executarMania();
echo '<br/>';
$filho->x();
?>