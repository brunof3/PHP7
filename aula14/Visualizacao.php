<?php
require_once 'Gafanhoto.php';
require_once 'Video.php';
class Visualizacao  {
    private $espectador;
    private $filme;
    
    
    function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->settotAssistido($this->espectador->gettotAssistido()+1);
    }
    
    function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    function avaliarNota($nota){
    $this->filme->setAvaliacao($nota);
    }
    function avaliarPorc($porc){
       
        if($porc<=20){
            $nova=3;
        }elseif($porc<=50){
            $nova=5;
        }elseif($porc<=90){
            $nova=8;                   
        }elseif($porc>90 && $porc<=100){
            $nova=10;
        }else{
            echo "<p>ensira uma nota válida</p>";
        }
        $this->filme->setAvaliacao($nova);
    }
    
    
    
    function getEspectador() {
        return $this->espectador;
    }

    function getFilme() {
        return $this->filme;
    }

    function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    function setFilme($filme) {
        $this->filme = $filme;
    }


}
