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
        $p[0]=new Pessoa("Claudio", 33, "masculino");
        $p[1]=new Pessoa("joão", 19, "masculino");
        $p[2]=new Pessoa("Ana", 25, "feminino");
        $a=new Aluno("Medicina", $p[1]);
        $a->cancelarMatr();
        print_r($a);
        $b=new Professor("medicina", 1200, $p[2]);
        $b->receberAum(500);
        print_r($b);
        $c=new Funcionario("Limpeza", $p[0]);
        print_r($c);
       $c->mudarTrabalho();
       print_r($c);
       
        ?>
        </pre>
    </body>
</html>
