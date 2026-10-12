<?php

$base=$_POST["base"];
$altezza=$_POST["altezza"];

echo "Hai inserito come base:".$base."<br>";
echo "Hai inserito come altezza:".$altezza."<br><br>";

$perimetro = ($base + $altezza)*2;
$area=$base * $altezza;
$diagionale =
