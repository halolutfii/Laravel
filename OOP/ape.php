<?php 

    require_once("animal.php");

    class Ape extends Sheep {
        public $legs = "2";
        
        public function yell(){
            echo "Yell : Auooo";
        }
    }
?>