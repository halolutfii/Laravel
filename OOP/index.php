<?php

    require_once("animal.php");
    require_once("ape.php");
    require_once("frog.php");

$sheep = new Sheep("Shaun");

echo "Name : ".$sheep->name."<br>"; // "Shaun"
echo "Legs : ".$sheep->legs."<br>"; // 4
echo "Cold blooded : ".$sheep->cold_blooded."<br><br>"; // "no"

$kodok = new Frog("Buduk");

echo "Name : ".$kodok->name."<br>"; // "Buduk"
echo "Legs : ".$kodok->legs."<br>"; // 4
echo "Cold blooded : ".$kodok->cold_blooded."<br>"; // "no"
$kodok->jump(); // "Hop Hop


$sunggokong = new Ape("Kera Sakti");

echo "Name : ".$sunggokong->name."<br>"; // "Kera Sakti"
echo "Legs : ".$sunggokong->legs."<br>"; // 2
echo "Cold Blooded : ".$sunggokong->cold_blooded."<br>"; // "no"
$sunggokong->yell(); // "Auooo"
?>