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
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';
        
        $v = new Visitante();
        $v->setNome("carlos");
        $v->setIdade(30);
        $v->fazerAniv();
        $v->setSexo("G");
        print_r($v);
        
        /*$a=new Aluno();
        $a->setNome("Joao");
        $a->setIdade(33);
        $a->setSexo("Homo");
        $a->setMatricula(false);
        $a->setCurso("chupador de pica");
        $a->pagarMensalidade();
        print_r($a);
        
        
        $b=new Bolsista();
        $b->renovarBolsa();
        $b->setBolsa(12.5);
        $b->setNome($v->getNome());
        $b->setIdade($v->getIdade());
        $b->setSexo($v->getSexo());
        $b->setCurso("Administração");
        $b->setMatricula(false);
        $b->pagarMensalidade();
        print_r($b);*/
        
        $p=new Professor();
        $p->setNome("João");
        $p->setIdade(60);
        $p->setEspecialidade("Informática");
        $p->setSalario(1300);
        $p->setSexo("Machisto");
        $p->receberAumento(700);
        print_r($p);
        
        $t=new Tecnico();
        $t->setNome("Josiscleiton");
        $t->setIdade(45);
        $t->setRegProf(44);
        $t->praticar();
        $t->setSexo("Homoafetivo");
        print_r($t);
        
        ?>
</pre>
    </body>
</html>
