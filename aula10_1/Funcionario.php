<?php
require_once 'Pessoa.php';
class Funcionario  {
    private $setor;
    private $trabalhando;
    
    function __construct($setor,$funcionario){
        $this->setSetor($setor);
        $this->setFuncionario($funcionario);
        $this->setTrabalhando(true);
    }
    function mudarTrabalho(){
        if ($this->trabalhando = true){
            $this->setTrabalhando(false);
        }
        
    }
    function getSetor() {
        return $this->setor;
    }
    

    function getTrabalhando() {
        return $this->trabalhando;
    }
    function getFuncionario(){
        return $this->funcionario;
    }
    function setFuncionario($funcionario){
        $this->funcionario=$funcionario;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }


    
}
