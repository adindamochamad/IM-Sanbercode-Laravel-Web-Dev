<?php

require_once 'animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

echo "<h2>Release 0 - Animal Class</h2>";

$sheep = new Animal("shaun");

echo "Name: " . $sheep->name . "<br>"; // "shaun"
echo "Legs: " . $sheep->legs . "<br>"; // 4
echo "Cold Blooded: " . $sheep->cold_blooded . "<br>"; // "no"

echo "<hr>";

echo "<h2>Release 1 - Inheritance</h2>";

echo "<h3>Ape Class</h3>";
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "<br>";
echo "Legs: " . $sungokong->legs . "<br>";
echo "Cold Blooded: " . $sungokong->cold_blooded . "<br>";
echo "Yell: ";
$sungokong->yell(); // "Auooo"
echo "<br>";

echo "<hr>";

echo "<h3>Frog Class</h3>";
$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "<br>";
echo "Legs: " . $kodok->legs . "<br>";
echo "Cold Blooded: " . $kodok->cold_blooded . "<br>";
echo "Jump: ";
$kodok->jump(); // "hop hop"
echo "<br>";
