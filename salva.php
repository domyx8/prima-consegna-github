<?php

$base=$_POST["base"];
$altezza=$_POST["altezza"];

echo "Hai inserito come base:".$base."<br>";
echo "Hai inserito come altezza:".$altezza."<br><br>";

$perimetro = ($base + $altezza)*2;
$area=$base * $altezza;
$diagonale = sqrt($base**2 + $altezza**2);

echo "il perimetro è di:".$perimetro."<br>";
echo "area è di:".$area."<br>";
echo "la diagonale è di:".$diagonale."<br>";