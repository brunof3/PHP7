<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao=0;
        $this->views = 0;
        $this->curtidas=0;
        $this->reproduzindo=false;
    }

    function play(){
        if($this ->reproduzindo == false){
        $this -> reproduzindo = true;
        }else{
            echo "<p>Vídeo já reproduzindo</p>";
        }
    }
    function pause(){
        if($this->reproduzindo == true){
            $this->reproduzindo=false;
        }else{
            echo "<p>Vídeo já pausado!</p>";
        }
    }
    function like(){
        $this -> curtidas ++;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }

    function getViews() {
        return $this->views;
    }

    function getCurtidas() {
        return $this->curtidas;
    }

    function getReproduzindo() {
        return $this->reproduzindo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAvaliacao($avaliacao) {
        $media=($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $media;
    }

    function setViews($views) {
        $this->views = $views;
    }

    function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }


}
