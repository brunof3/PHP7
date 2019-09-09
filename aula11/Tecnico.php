<?php
require_once 'Pessoa.php';
class Tecnico extends Pessoa {
    private $registroProfissional;
    
    function praticar(){
        $this->registroProfissional+=1;
    }
    function getRegProf(){
       return $this->registroProfissional;
    }
    function setRegProf($registroProfissional){
        $this->registroProfissional= $registroProfissional;
    }
}
