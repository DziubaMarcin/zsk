<<<<<<< HEAD
<?php

echo PHP_VERSION; //wersja PHP 8.0.10
echo '<br>';
echo 2**10,'<br>'; //1024 (2^10)

$x=100;
$y=10;

echo $x<=>$y,('<br>'); //operator porównania <=>

//równe (1)

$x=1;
$y=1.0;

echo gettype($x),'<br>'; //integer
echo gettype($y),'<br>'; //double

if ($x==$y) {
  echo 'Równe';
  // code...
}else {
  echo 'Różne';
}
echo '<br>';

if ($x===$y) {
  echo 'Identyczne';
  // code...
}else {
  echo 'Różne';
}
echo '<br>';

/*
  postinkrementacja $x++
  pretinkrementacja ++$x
  postdekrementacja $x--
  predekrementacja --$x
*/

/*
$x=10;
$x++;
echo $x; //11
$x = $x++;
echo $x; //11
$y = $x++;
echo $x; //12
echo $y;//11
$x= --$x;
echo $x;//11
echo '<hr>'
*/

//Zadanie

$x=1;
echo $x,'<br>'; //1
$x=$x++;
echo$x,'<br>'; //1
$x=++$x;
echo$x,'<br>'; //2
$y=++$x;
echo$x,'<br>'; //3
echo$y,'<br>'; //3
$y=$x++;
echo$x,'<br>'; //4
echo$y,'<br>'; //3

?>
=======
<?php

echo PHP_VERSION; //wersja PHP 8.0.10
echo '<br>';
echo 2**10,'<br>'; //1024 (2^10)

$x=100;
$y=10;

echo $x<=>$y,('<br>'); //operator porównania <=>

//równe (1)

$x=1;
$y=1.0;

echo gettype($x),'<br>'; //integer
echo gettype($y),'<br>'; //double

if ($x==$y) {
  echo 'Równe';
  // code...
}else {
  echo 'Różne';
}
echo '<br>';

if ($x===$y) {
  echo 'Identyczne';
  // code...
}else {
  echo 'Różne';
}
echo '<br>';

/*
  postinkrementacja $x++
  pretinkrementacja ++$x
  postdekrementacja $x--
  predekrementacja --$x
*/

/*
$x=10;
$x++;
echo $x; //11
$x = $x++;
echo $x; //11
$y = $x++;
echo $x; //12
echo $y;//11
$x= --$x;
echo $x;//11
echo '<hr>'
*/

//Zadanie

$x=1;
echo $x,'<br>'; //1
$x=$x++;
echo$x,'<br>'; //1
$x=++$x;
echo$x,'<br>'; //2
$y=++$x;
echo$x,'<br>'; //3
echo$y,'<br>'; //3
$y=$x++;
echo$x,'<br>'; //4
echo$y,'<br>'; //3

?>
>>>>>>> 3f38c779edb040ba80be75f97c3719d8e5a2c00c
