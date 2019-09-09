<?php

require_once 'Mamifero.php';
class Canguru extends Mamifero {
    function usarBolsa(){
        echo "<p>Usando BOLSA</p>";
        
    }
    function locomover() {
        echo "<p>Saltando</p>";
    }
}
