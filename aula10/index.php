<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';
        
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();
        
        $p1->setNome("Pedro");
        $p1->setIdade(22);
        $p1->setSexo("M");
        $p1->fazerAniversario();
        
        $p4->setNome($p1->getNome());
        $p4->setSetor("Estoque");
        $p4->setIdade($p1->getIdade());
        $p4->setSexo($p1->getSexo());
        $p4->mudarTrabalho();
        //$p4->mudarTrabalho();
        
        
        $p2->setNome("Maria");
        $p2->setCurso("Informática");
        $p2->setSexo("F");
        $p2->setIdade(30);
        $p2->cancelarMatr();
        $p2->cancelarMatr();
       
        
        
        $p3->setNome("Claudia");
        $p3->setSalario(2300);
        $p3->setEspecialidade("Informática");
        $p3->setSexo("Gay");
        $p3->setIdade(35);
        $p3->receberAum(500);
        
        
        print_r($p1);
        echo"<hr>";
        print_r($p4);
        echo"<hr>";
        print_r($p3);
        echo"<hr>";
        print_r($p2);
        echo"<hr>";
      
        ?>
        </pre>
    </body>
</html>
