<?php
require_once 'Pessoa.php';
require_once 'index.php';
require_once 'publicacao.php';
class Livro {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    function __construct($titulo,$autor,$totPaginas,$pagAtual,$leitor) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setPagAtual($pagAtual);
        $this->setAberto(false);
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
      function folear(){
          if($this->getAberto(false)){
          echo "<p>O livro está fechado</p>";
          }else{
          $this->setPagAtual($this->getPagAtual()+1);
      }}
      function avancarPag(){
          if($this->getAberto(true)){
              $this->setPagAtual($this->getPagAtual()+1);
          }else{
             echo "<p>O livro está fechado</p>";
      }}
       function voltarPag(){
           if($this->getAberto(true)){
          $this->setPagAtual($this->getPagAtual()-1);
           }else{
               echo "<p>O livro está fechado</p>";
           }
       }
      
   
    
    function detalhes(){
        echo "<p>".$this ->getLeitor().", está lendo ".$this->getTitulo().", do autor ".$this->getAutor().", com ".$this->getTotPaginas()." páginas e está atualmente na pag ".$this->getPagAtual()."</p>";
      
        echo" o livro está ".$this->aberto= $this->getAberto()?'aberto ':'fechado ';
        echo "e o leitor é ".$this->getLeitor();
        
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
