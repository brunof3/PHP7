<?php

class Caneta {
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga = 100;
  protected $tampada;
  
 public function rabiscar(){
      if ($this->tampada == true){
          echo "<p>ERRO: NÃO POSSO RABISCAR!";
      } else {
          echo "<p>Estou Rabiscando ...</p>";
      
          }
 }  
 
 public function ponta(){
     $this->ponta = 0.5;
 }
 public function tampar(){
      $this->tampada = true;
      
  }
  public function destampar(){
      $this->tampada = false;
      
  }
}
