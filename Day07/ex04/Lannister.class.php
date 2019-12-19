<?php
class Lannister {
    public function sleepWith ($person){
        if (is_a($person, "Lannister")) {
            echo "Not even if I'm drunk !" . PHP_EOL;
        }else {
            echo "Let's do this." . PHP_EOL;
        }   
    }
}
?>
