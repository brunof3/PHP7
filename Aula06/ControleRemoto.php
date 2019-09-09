<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
    private $rounds;
    private $aprovada;
    
//MÉTODOS ESPECIAIS
    public function __construct(){
        $this -> volume = 50;
        $this -> ligado = false;
        $this -> tocando = false;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }
    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

   
    private function getVolume() {
        return $this->volume;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }
// MÉTODOS ABSTRATOS
   
    public function ligar() {
        $this ->setLigado(true);
    }
   public function desligar() {
        $this ->setLigado(false);
    }
    public function abrirMenu() {
        echo "<BR>------- MENU --------<br>";
        echo "<br>Está ligado?: ".($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está Tocando?: ".($this->getTocando()?"SIM":"NÃO");
        echo "<br>";
        echo "Volume ".$this->getVolume();
        echo '<br>';
        for($i=0;$i <= $this->getVolume();$i+=1){
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu() {
        echo "<br> Fechando Menu ...";
    }
    public function maisVolume() {
        if ($this -> getLigado()){
            $this->setVolume($this -> getVolume() + 5);
        }else{
            echo "<p> ERRO! Não posso aumentar o volume";
        }
    }
    public function menosVolume() {
        if($this->getLigado()){
            $this -> setVolume($this->getVolume() - 5);
        }else{
            echo "<p>ERRO! Não posso diminuir o volume";
        }
    }
    public function ligarMudo() {
        if ($this->getLigado()&& $this ->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if ($this -> getLigado()&& $this ->getVolume()==0){
            $this->getVolume(50);
        }
    }
     public function play() {
        if($this ->getLigado()&& !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause() {
        if($this ->getLigado() && $this->setTocando()){
          $this->setTocando(false);
        }
    }
}