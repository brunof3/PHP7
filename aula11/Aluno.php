<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
        private $matricula;
        private $curso;
        
        function pagarMensalidade(){
            echo"<p>Pagando mensalidade do aluno:<b> $this->nome</b></p>";
            $this->matricula=true;
            
        }
        
        function getMatricula() {
            return $this->matricula;
        }

        function getCurso() {
            
            return $this->curso;
        }

        function setMatricula($matricula) {
            $this->matricula = $matricula;
        }

        function setCurso($curso) {
            $this->curso = $curso;
           
        }


}
