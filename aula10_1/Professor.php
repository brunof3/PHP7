<?php

require_once 'Pessoa.php';
class Professor {
    private $especialidade;
    private $salario;
    
    function __construct($especialidade,$salario,$prof) {
        $this->setEspecialidade($especialidade);
        $this->setSalario($salario);
        $this->setProf($prof);

        
    }
    function receberAum($au){
        $this->salario+=$au;
    }
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }
    function getProf(){
        return $this->prof;
    }
    function setProf($prof){
        $this->prof=$prof;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


}

