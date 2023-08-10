<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("Shaun");
$sungokong = new Sungokong("Buduk"); 
$kodok = new Kodok("Kera Sakti"); 

echo "Name: " . $sheep->name ."<br>";
echo "legs: " . $sheep->legs ."<br>";
echo "cold blooded: " . ($sheep->cold_blooded) . "<br>";
echo "<br>";

echo "Name: " . $kodok->name ."<br>";
echo "legs: " . $kodok->legs ."<br>";
echo "cold blooded: " . ($kodok->cold_blooded) . "<br>";
echo "Jump: " . $kodok->jump() ."<br>"; // Memanggil metode jump() dari objek frog
echo "<br>";

echo "Name: " . $sungokong->name ."<br>";
echo "legs: " . $sungokong->legs ."<br>";
echo "cold blooded: " . ($sungokong->cold_blooded) . "<br>";
echo "Yell: " . $sungokong->yell() ."<br>"; // Memanggil metode yell() dari objek ape
echo "<br>";

?>