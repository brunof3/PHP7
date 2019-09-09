<?php

class conta {
   public $numconta;
   protected $tipo;
   private  $dono;
   private $saldo;
   private $status;
 
     public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t === "CC"){
            $this->setSaldo(50);
        }elseif ($t==="CP"){
            $this->setSaldo(150);
        }
    }
    
    public function fecharConta(){
        if ($this->getSaldo() >0 || $this->saldo<0){ 
        echo "<p>Conta ainda tem dinheiro, não posso fechá-la</p>" ;
        }elseif($this->getSaldo()<0){ 
            echo"<p>Com está em débito, impossível encessar!</p>";
            
        }else{
            print"Conta fechada com sucesso";
            $status=false;
       }      
    }
    public function depositar($v){
        if($this->getStatus()){
      $this->setSaldo($this->getSaldo()+$v);
        }else{
            print "Impossível D E P O S I T A R";
        }
    }
    public function sacar($v){
        if($this -> getStatus()){
            if($this -> getSaldo>v){
                $this->setSaldo(getSaldo()-$v);
            }else{
                print("Saldo Insuficiente");
            }
        }else{
            print("Impossível Sacar");
        }
        
    }
    public function pagarMensal(){
        $v ;
        if($tipo = "CC"){
            $v-12;
        }elseif($this ->getTipo()=="CP"){
            $v=20;
        }
      if($status = true){
          if($saldo > $v){
              $this->setSaldo($this->getSaldo-$v);
          }else{
              print("Impossível Pagar");
          }
      }                    
    }
   function __construct(){
            $this -> setSaldo(0);
            $this -> setStatus(false);
            echo "<p>Conta Criada com Sucesso</p>";
}
          
  
function getNumconta() {
    return $this->numconta;
}

function getTipo() {
    return $this->tipo;
}

function getDono() {
    return $this->dono;
}

function getSaldo() {
    return $this->saldo;
}

function getStatus() {
    return $this->status;
}

function setNumconta($numconta) {
    $this->numconta = $numconta;
}

function setTipo($tipo) {
    $this->tipo = $tipo;
}

function setDono($dono) {
    $this->dono = $dono;
}

function setSaldo($saldo) {
    $this->saldo = $saldo;
}

function setStatus($status) {
    $this->status = $status;
}


  
}
?>