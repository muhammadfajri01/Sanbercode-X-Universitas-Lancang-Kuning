<?php
require 'animal.php';
require "ape.php";
require "frog.php";

$sheep = new Animal("shaun");
$sungokong = new Ape("kera sakti");
$kodok = new Frog("buduk");

echo "Name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>";
echo "Cold Blooded : " . $sheep->cold_blooded . "<br>";

echo "<br>============<br>";

echo "Name : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs . "<br>";
echo "Cold Blooded : " . $kodok->cold_blooded . "<br>";
echo "jump : ";
$kodok->jump();
echo "<br>";

echo "<br>============<br>";

echo "Name : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs . "<br>";
echo "Cold Blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : ";
$sungokong->yell();
echo "<br>";