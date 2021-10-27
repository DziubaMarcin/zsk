<?php

if (!empty($_GET['nazwisko']) && !empty($_GET['kolor'])) {
  if (($_GET['nazwisko'])=="Nowak"){
    $z=str_replace('w', '*', $_GET['nazwisko']);
    echo <<< L
    Witaj $_GET[nazwisko]
    Twój ulubiony kolor: $_GET[kolor]
    Nazwisko po zmianie: $z
    <br>
    <a href="./../Dziuba.php">Strona główna</a>
    L;
  }
  else {
    echo <<< L
    Witaj: $_GET[nazwisko]
    Twój ulubiony kolor: $_GET[kolor]
    <br>
    <a href="./../Dziuba.php">Strona główna</a>
    L;
  }
}
else {
header("location: ../Dziuba.php?blad=1");
}
?>
