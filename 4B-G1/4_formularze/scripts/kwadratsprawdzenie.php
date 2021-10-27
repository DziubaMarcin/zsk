<?php

if (!empty($_GET['sideA'])){
  $sideA=str_replace(',','.',$_GET['sideA']);
  $p = $sideA*$sideA;
  echo <<<RESULT
  Pole kwadratu wynosi: $p cm <sup>2</sup>
  <br>
  RESULT;
  $o = 4*$sideA;
  echo <<< RESULT
  Obwód kwadratu wynosi: $o cm
  <hr>
  RESULT;
}
  else {
  echo "Wypełnij wszystkie pola!";
}

?>
