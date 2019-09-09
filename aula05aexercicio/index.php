<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <pre>
    <body>





        <?php
        require_once 'Conta.php';
        $p1=new Conta();//JUBILEU
        $p2=new Conta();//CREUZA
        
        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumconta(1111);
        $p1->depositar(300);
        $p1->sacar(338);
        $p1->pagarMensal();
        $p1->fecharConta();
        echo "<br>";
        
        $p2->abrirConta("CP");
        $p2->setDono("Creuza");
        $p2->setNumconta(2222);
        $p2->depositar(500);
        $p2->sacar(630);
        $p2->pagarMensal();
        $p2->fecharConta();
        echo"<br>";
        print_r($p1);
        echo"<br>";
        print_r($p2);
        ?>
    </pre>
    </body>
</html>
