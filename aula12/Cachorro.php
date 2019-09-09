<?php

require_once 'Lobo.php';
class Cachorro extends Lobo{   
    
    function enterrarOsso(){
        echo "<p>enterrando Osso</p>";
    }
    function abanarRabo(){
        echo "<p>Abanando Rabo ! </p>";
    }
    function emitirSom() {
        echo "<p>Au ! Au ! Au !</p>";
    }
    function reagirFrase($frase){
        if($frase=="toma comida" || $frase=="Olá"){
            echo"<p>Abanar Rabo e Latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }
    function reagirHora($hora, $min){
        if($hora<12){
            echo"<p>Abanar Rabo!</p>";
        }elseif($hora>=18){
            echo "<p>Ignorar</p>";
        }else{
            echo "<p>Abanar o rabo E latir !!!</p>";
        }
    }
    function reagirDono($dono){
        if ($dono == true){
            echo "<p>Abanar rabo!</p>";
            
        }else{
            echo "<p>Rosnar e Latir </p>";
        }
    }
    function reagirIdadePeso($idade, $peso){
        if ($idade<5){
            if($peso<10){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Latir</p>";
            }
            
        }
        if($peso<10){
            echo "<p>Rosnar</p>";
        }else{
            echo "<p>Ignorar</p>";
        }
    }
  
    
    
}
