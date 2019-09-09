<?php
require_once 'Pessoa.php';
require_once 'index.php';
require_once 'publicacao.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    function __construct($titulo,$autor,$totPaginas,$leitor) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->aberto=false;
        $this->pagAtual=0;
        $this->setLeitor($leitor);
    }
    function abrir(){
        if($this->getAberto(false)){
           echo "<p>O livro está fechado</p>";
        }else{
        $this->setAberto(true);
        }}
    function fechar(){
        if($this->getAberto(false)){
           echo "<p>O livro está fechado</p>";
        }else {
        $this->setAberto(false);
        }}
      function folear($p){
          if($p>$this->totPaginas){
              $this->pagAtual=0;
          }else{
          $this->setPagAtual($p);
      }}
      function avancarPag(){
        $this->pagAtual++;
          
      }
       function voltarPag(){ 
        $this->setPagAtual($this->getPagAtual()-1);
       }
      
   
    
    function detalhes(){
        echo "<hr> ".$this ->titulo.", escrito por ".$this->autor;
        echo " <br> Páginas: ".$this->totPaginas." Pag atual :".$this->pagAtual;
        echo "<br> Sendo lido por  ".$this->leitor->getNome()."<hr>";
    
      
     
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;    
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }


}
