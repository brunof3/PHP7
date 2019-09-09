<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Gafanhoto.php';
        require_once 'Video.php';
        require_once 'Visualizacao.php';
        
        $p[0]=new Gafanhoto("Claudio", 33, "gay", "safado11");
        
        $p[0]->viuMaisUm();
        $p[0]->ganharExp();
        //print_r($p);
        echo"<hr>";
        
        $p[1]=new Gafanhoto("Jubileu", 22, "M", "SAFAD");
       $v[0]=new Video("Titulo 1");
       $v[1]=new Video("Titulo 2");
       $v[2]=new Video("Tutulo 3"); 
       $v[0]->like();
       $v[0]->play();
       $v[0]->play();
       
       //$v[0]->pause();
       //print_r($v);
       
       $vis[0]=new Visualizacao($p[1], $v[0]);
       
       $vis[1]=new Visualizacao($p[0], $v[1]);
       $vis[1]->avaliarPorc(100);
       $vis[0]->avaliarNota(10);
       print_r($vis);
        ?>
</pre>
    </body>
</html>
