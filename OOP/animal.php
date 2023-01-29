<?php

class Sheep {
    public $name;
    public $legs = "4";
    public $cold_blooded = "no";  
    
    public function __construct($strings)
    {
        $this->name = $strings;
    }
}

?>