<?php

require_once 'lobo.php';
class Cachorro extends Mamifero{
  
    function enterrarOsso(){
        echo "<p>enterrando Osso</p>";
    }
    function abanarRabo(){
        echo "<p>Abanando Rabo ! </p>";
    }
    function emitirSom() {
        echo "<p>Au ! Au ! Au !</p>";
    }

}
