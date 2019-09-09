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
        $p[0]->fazerAniversario();
        print_r($p[0]);
        
        $l=array();
        $l[0] = new Livro("VIA LOK", "MARCO DROGA", 114, $p[0]);

        print_r($l[0]);
        $l[0]->detalhes();
        echo "<hr>";
      
        $p[1] = new Pessoa("João",39,'MASCULINO');
        $l[1]=new Livro("TARADOS SOZINHOS", "minino DOG", 1399, $p[1]);
        print_r($p[1]);
        print_r($l[1]);
        $l[1]->detalhes();
        ?>
</pre>
    </body>
</html>
