<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa  {
    private $setor;
    private $trabalhando;
    
    /*function __construct($setor,$funcionario){
        $this->setSetor($setor);
        $this->setFuncionario($funcionario);
        $this->setTrabalhando(true);
    }*/
    function mudarTrabalho(){
        $this-> trabalhando = ! $this->trabalhando;
        
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
