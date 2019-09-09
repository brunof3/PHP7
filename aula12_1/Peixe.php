<?php
require_once 'Animal.php';;
class Peixe extends Animal { 
    private $corEscama;
    
    function soltarBolha(){
        echo "<p>Soltou uma BOLHA</p>";
    }
    
    public function alimentar() {
        echo "<p>Comendo Substâncias</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe não faz SOM</p>";
    }

    public function locomover() {
        echo "<p>Nadando</p>";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }



}
