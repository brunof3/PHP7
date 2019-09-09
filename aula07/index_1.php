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
        require_once 'Lutador.php';
        $l=array();
        $l[0]=new Lutador ("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
        $l[1]=new Lutador("Putscript","Brasil",29,1.68,57.8,14,2,3);
        $l[2]=new Lutador("Snapshadow","EUA",35,1.65,80.9,12,2,1);
        $l[3]=new Lutador("Drad Code","Austrália",28,1.93,81.6,12,0,2);
        $l[4]=new Lutador("Ufocobol", "Brasil",37,1.70,119.3,5,4,3);
        $l[5]=new Lutador("Nerdaart", "EUA", 30, 1.81,105.7,12,2,4);
        
        //print_r($c1);
       echo"<br>";
       //$l[0]-> apresentar();
       /*
        print_r($l[0]);
       echo"<br>";
       print_r($l[1]);
       echo"<br>";
       print_r($l[2]);
       echo"<br>";
       print_r($l[3]);
       echo"<br>";
       print_r($l[4]);
       echo"<br>";
       print_r($l[5]);
       echo"<br>;";
        * 
        */
       $l[0]->apresentar();
       $l[1]->apresentar();
       $l[2]->apresentar();
       $l[3]->apresentar();
       $l[4]->apresentar();
       $l[5]->apresentar();
    
       
       $l[0]->status();
       echo"<br>";
      $l[1]->status();
       echo"<br>";
       $l[2]->status();
       echo"<br>";
       $l[3]->status();
       echo"<br>";
       $l[4]->status();
       echo"<br>";
       $l[5]->status();
       echo"<br>";
    
       
       
        ?>
        </pre>   
    </body>
</html>
