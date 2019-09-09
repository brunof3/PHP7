    <?php
require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;
    
    function fazerNinho(){
        echo "<p>Construiu um Ninho!<p>";
    }
    
    public function alimentar() {
        echo "<p>Comendo Frutas</p>";
    }

    public function emitirSom() {
        echo "<p>Som da Ave</p>";
    }

    public function locomover() {
        echo "<p>Voando</p>";
    }

}
