<?php
// Modelo
class Veiculo {
    // Atributos
    public $nome = null;
    public $cor = null;
    public $velocidade = null;
    public $ano = null;

    function marcha() {
        echo 'Pé na embreagem e mão para passar a macha!';
    }

    function __get($atributo) {
        return $this -> $atributo;
    }

    function __set($atributo, $valor) {
        $this -> $atributo = $valor;
    }
}

$carro = new Veiculo();

$carro -> __set('nome', 'Chevrolet Onix');
$carro -> __set('cor', 'Vermelho');
$carro -> __set('velocidade', '250km/h');
$carro -> __set('ano', '2024');
$carro -> __set('tetosolar', 'Sim');

echo "Carro: ".$carro -> __get('nome');
echo "<br/>";
echo "Cor: ".$carro -> __get('cor');
echo "<br/>";
echo "Velocidade: ".$carro -> __get('velocidade');
echo "<br/>";
echo "Ano: ".$carro -> __get('ano');
echo "<br/>";
echo "Possui teto solar: ".$carro -> __get('tetosolar');
echo "<br/>";
echo $carro->marcha();
echo "<br/>";
echo "<hr>";
?>