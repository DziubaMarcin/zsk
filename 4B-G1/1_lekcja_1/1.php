<?php

echo "zsk<br>";
echo "zsk";

$name = "Janusz";
echo "<br>Twoje imię to: $name";
echo '<br>Twoje imię to: $name';

$x='x';
$y='y';

//konkatenacja
echo $x.$y;

//Typy danych

//Logiczny:
$prawda = true;
$fałsz = false;

echo $prawda; //1
echo $fałsz; // nie wyświatla niczego

//Całkowity:

$całkowita = 10;
$bin = 0b1011; //11 (system dwójkowy)
$oct = 011;//9 (system ósemkowy)
$hex = 0x11;//17 (system szesnastkowy)

echo"<br>$całkowita";
echo"<br>$bin";
echo"<br>$oct";
echo"<br>$hex";

//Zmiennoprzecinkowe:

$z = 10.5;


echo"<br>".gettype($z)."<br>";//double
echo"<br>".gettype($bin);//integer
echo"<br>".gettype($prawda);//boolean

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

echo $text;

?>
