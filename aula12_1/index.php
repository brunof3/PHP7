<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Animal.php';
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';
        require_once 'Lobo.php';
        
        $m=new Mamifero();
        $p=new Peixe();
        $r=new Reptil();
        $a=new Ave();
        $c=new Canguru();
        $c1=new Cachorro;  
        $l=new Lobo();
        $ar=new Arara();
        $f=new Goldfish();
        $t=new Tartaruga();
        $co= new Cobra();
           
        //mamifero
        $m->setPeso(33.5);
        $m->setIdade(2);
        $m->setMembros(4);
        print_r($m);
        $m->alimentar();
        $m ->emitirSom();
        $m->locomover();
        echo "<hr>";
        
        //lobo
        $l->setPeso(30);
        $l->setMembros(4);
        $l->setIdade(3);
        $l->setCorPelo("Branco");
        print_r($l);
        $l->emitirSom();
        $l->locomover();
        echo"<hr>";
        
        
        //cachorro
        $c1->setPeso(25);
        $c1->setMembros($m->getMembros());
        $c1->setIdade(3);
        print_r($c1);
        $c1->emitirSom();
        $c1->locomover();
        
        echo "<hr>";
        
        //canguru
        $c->setPeso(85.3);
        $c->setIdade(5);
        $c->setMembros(4);
        print_r($c);
        $c->locomover();
        $c->emitirSom();
        echo "<hr>";
         
        //Peixe
        $p->setPeso(.35);
        $p->setIdade(1);
        $p->setMembros(0);
        print_r($p);
        $p->alimentar();
        $p->emitirSom();
        $p->locomover();
        $p->soltarBolha();
        echo"<hr>";
        
        //Goldfish
        $f->setPeso(.50);
        $f->setIdade(1);
        $f->setMembros("2 Barbatanas");
        print_r($f);
        $f->locomover();
        $f->soltarBolha();
        $f->emitirSom();
        echo"<hr>";
        
        //Ave
        $a->setPeso(.89);
        $a->setIdade(2);
        $a->setMembros(2);
        print_r($a);
        $a->locomover();
        $a->alimentar();
        $a->emitirSom();
        $a->fazerNinho();
        echo"<hr>";
        
        //arara
        $ar->setPeso(1);
        $ar->setIdade(1);
        $ar->setMembros("2 Asas");
        print_r($ar);
        $ar->locomover();
        $ar->fazerNinho();
        $ar->emitirSom();
        echo"<hr>";
        
        //Réptil
        $r->setPeso(1);
        $r->setIdade(1);
        $r->setMembros(4);
        print_r($r);
        $r->locomover();
        $r->emitirSom();
        echo "<hr>";
        
        //Tartaruga
        $t->setPeso(1);
        $t->setIdade(1);
        $t->setMembros(4);
        print_r($t);
        $t->locomover();
        $t->emitirSom();
        echo "<hr>";
        
        $co->setPeso(.99);
        $co->setIdade(3);
        $co->setMembros(0);
        print_r($co);
        $co->locomover();
        $co->emitirSom();
          ?>
         
        </pre>
    </body>
</html>
