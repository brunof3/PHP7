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
            print"<p>Conta de ".$this->getDono()." fechada com sucesso</p>";
            $this->setStatus(false);
       }      
    }
    public function depositar($v){
        if($this->getStatus()){
      $this->setSaldo($this->getSaldo()+$v);
      echo "<p>Depósito de R$$v na conta de ".$this->getDono()." .</p>";
        }else{
            print "Impossível D E P O S I T A R";
        }
    }
    public function sacar($v){
        if($this -> getStatus()){
            if($this -> getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo"<p>Saque de R$$v,00 autorizado na conta de ". $this->getDono().".</p>";
            }else{
                echo "Saldo Insuficiente";
            }
        }else{
            echo "Impossível Sacar";
        }
        
    }
    public function pagarMensal(){
        if($this->getTipo() == "CC"){
            $v = 12;
        }else if($this ->getTipo()=="CP"){
            $v = 20;
        }
      if($this->getStatus()){
        
              $this->setSaldo($this->getSaldo()- $v);
              echo"<p>Mensalidade de $v debitada na conta de ".$this->getDono().". </p>";
          }else{
              print("Impossível Pagar");
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