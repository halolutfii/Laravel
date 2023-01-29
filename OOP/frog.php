<?php 
    require_once("animal.php");

    class Frog extends Sheep {
        public function jump(){
            echo "Jump : Hop Hop"."<br><br>";
        }
    }
?>