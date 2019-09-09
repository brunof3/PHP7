<?php

class Professor extends Pessoa {
    private $especialidade;
    private $salario;
    
    function receberAumento($au){
        $this->salario +=($au);
    }
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


}
