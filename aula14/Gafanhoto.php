<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{

    private $login;
    private $totAssistido;
    
    function __construct($nome,$idade,$sexo,$login) {
        parent::__construct($nome,$idade,$sexo);
        $this->login=$login;
        $this->totAssistido =0; 
    }
    
    function viuMaisUm(){
     $this->totAssistido++;   
    }
    function ganharExp() {
        $this->experiencia++;
    }
   
   function getLogin() {
       return $this->login;
   }

   function getTotAssistido() {
       return $this->totAssistido;
   }

   function setLogin($login) {
       $this->login = $login;
   }

   function setTotAssistido($totAssistido) {
       $this->totAssistido = $totAssistido;
   }


}
