<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Publicacao.php';
        require_once 'Livro.php';
        $p = array();
        $p[0] = new Pessoa("ANA",30,'FEMININO');
        print_r($p[0]);
        $p[0]->fazerAniversario();
        print_r($p[0]);
        $l=array();
        $l[0] = new Livro("VIA LOK", "MARCO DROGA", 15, 4, "claudia");
        
        $l[0]->detalhes();
        $l[0]->fechar();
       
         $l[0]->detalhes();
        ?>
</pre>
    </body>
</html>
