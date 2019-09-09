<?php
class Lutador {
    //ATRIBUTOS
   private $nome;
   private $nacionalidade;
   private $idade;
   private $altura;
   private $peso;
   private $categoria;
   private $vitorias;
   private $derrotas;
   private $empates;
   
    //MÉTODOS ESPECIAIS
   function __construct($no,$na,$id,$al,$pe,$vi,$de,$em) {
   $this->setNome($no);
   $this->setIdade($id);
   $this->setAltura($al);
   $this->setNacionalidade($na);
   $this->setPeso($pe);
   $this->setVitorias($vi);
   $this->setDerrotas($de);
   $this->setEmpates($em);
       
   }
   //MÉTODOS
   function apresentar(){
       echo "<p>----------------------------------------</p>";
       echo ("<p>Lutador: ". $this->getNome()."</p>");
       echo "<p>Origem: ".$this->getNacionalidade()."</p>";
       echo "<p>Idade: ".$this->getIdade()."</p>";
       echo $this->getAltura()  ."m De altura";
       echo "<p>Pesando: ".$this->getPeso(),"</p>";
       echo "<p>Categoria: ".$this->getCategoria(),"</p>";
       echo "Ganhou: ". $this->getVitorias()."</p>";
       echo "Perdeu: ",$this->getDerrotas()."</p>";
       echo "Empatou: ",$this->getEmpates();
       echo "<p>----------------------------------------</p>";
    }
   
   function status(){
        echo "<p>--------------------------------------------------------------------</p>";
       echo"<br>";
       echo $this->getNome()." vindo diretamente de ".$this->getNacionalidade();
       echo ", é um peso ", $this->getCategoria();
       echo ", com ".$this->getVitorias(), " vitórias,";
       echo " ".$this->getDerrotas()," derrotas";
       echo " e ", $this->getEmpates()," empates";
       
   }
   //MÉTODOS ESPECIAIS
   function ganharLuta(){
       $this->setVitorias($this->getVitorias() +1);
   }
   function perderLuta(){
       $this -> setDerrotas($this->getDerrotas() +1);
   }
   function empatarLuta(){
      $this ->setEmpates($this->getEmpates() +1);
   }    
  
   function getNome(){
       return $this->nome;
   }
   function setNome($no){
       $this->nome = $no;
       
   }
   function getPeso(){
       return $this->peso;
   }
   function setPeso($pe){
       $this ->peso = $pe;
      $this -> setCategoria();
      
   }
   function getCategoria(){
       return $this ->categoria;
   }
   private function setCategoria(){
       if($this->peso<52.2){
           $this->categoria = "Inválido";
       }elseif($this ->peso <= 70.3){
           $this->categoria = "Leve";
       }elseif($this ->peso <=83.9){
           $this ->categoria = "Médio";
       }elseif($this ->peso <=120.2){
           $this ->categoria = "Pesado";
       }else{
           $this->categoria = "Inválido";
       }
   }

   //MÉTODOS ESPECIAIS
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($na){
        $this->nacionalidade=$na;
    }
   function getIdade(){
       return $this ->idade;
   }
   function setIdade($id){
       $this->idade=$id;
   }
   function getAltura(){
       return $this -> altura;
   }
   function setAltura($al){
       $this->altura=$al;
   }
   function getVitorias(){
       return $this->vitorias;
   }
   function setVitorias($vi){
       $this->vitorias=$vi;
   }
   function getDerrotas(){
       return $this ->derrotas;
   }
   function setDerrotas($de){
       $this ->derrotas = $de;
   }
   function getEmpates(){
       return $this ->empates;
   }
   function setEmpates($em){
       $this -> empates = $em;
       
   
   }
}
