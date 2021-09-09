<?php

echo "zsk<br>";
echo "zsk";

$name = "Janusz";
echo "<br>Twoje imię to: $name";

$x='x';
$y='y';

echo $x.$y;

//Typy danych
//Logiczny:

$prawda = true;
$fałsz = false;

echo $prawda;
echo $fałsz;

//Całkowity:

$całkowita = 10;
$bin = 0b1011;
$oct = 11;
$hex = 0x11;

echo"<br>$całkowita";
echo"<br>$bin";
echo"<br>$oct";
echo"<br>$hex";

//Zmiennoprzecinkowe:

$z = 10.5;
echo"<br>".gettype($z)."<br>";

//Heredoc (Do stringów):
$surname = "Nowak";

echo <<< E
  Imię i Nazwisko:
  Janusz $surname<hr>
  Poznań
E;

$text= <<< E
  Imię i Nazwisko:
  Janusz $surname<hr>
  Poznań
E;

?>
