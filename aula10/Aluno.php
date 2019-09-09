<?php

require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    
   /* function __construct($curso,$aluno) {
        $this->setMatricula(true);
        $this->setCurso($curso);
        $this->setAluno($aluno);
        /*$this->setSexo($sexo);
        $this->setNome($nome);
        $this->setIdade($idade);
    }*/
    function cancelarMatr(){
       
            $this->matricula=!$this->matricula;
       
    }
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }
    function getAluno(){
        return $this->aluno;
    }
    function setAluno($aluno){
        $this->aluno=$aluno;   
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }


}
