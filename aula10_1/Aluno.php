<?php

require_once 'Pessoa.php';
class Aluno {
    private $matricula;
    private $curso;
    
    function __construct($curso,$aluno) {
        $this->setMatricula(true);
        $this->setCurso($curso);
        $this->setAluno($aluno);
    }
    function cancelarMatr(){
        if ($this->matricula=true){
            $this->matricula=false;
        }else{
            echo "aluno não matriculado";
        }
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
