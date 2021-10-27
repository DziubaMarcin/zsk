<<<<<<< HEAD
<?php
if (!empty($_GET['name']) AND !empty($_GET['surname'])){
  // echo $_GET['name'];
  if (ctype_upper(($_GET['name'])[0]) && ctype_upper(($_GET['surname'])[0])){
    $imie=substr($_GET['name'],0,10);
    $nazwisko=substr($_GET['surname'],0,10);
    echo <<< L
    imię: $imie<br>
    Nazwisko: $nazwisko<br>
    L;
  }
  else {
    echo "Wypełnij z dużej litery!";
  }
}else {
      echo "Wypełnij wszystkie dane ;)";
}

/* if(strlen($_POST['imie'])>10 || strlen($_POST['nazwisko'])>10){
  echo "Za dużo znaków";
}
elseif(($_POST['imie'])!=ucfirst($_POST['imie']) || substr($_POST['imie'],1)!=strtolower(substr($_POST['imie'],1))){
  echo "Pierwsza litera imienia musi być duża a reszta liter mała";
}
elseif(($_POST['nazwisko'])!=ucfirst($_POST['nazwisko'])  || substr($_POST['nazwisko'],1)!=strtolower(substr($_POST['nazwisko'],1))){
  echo "Pierwsza litera nazwiska musi być duża a reszta liter mała";
}
elseif(strlen($_POST['imie'])==0 OR strlen($_POST['nazwisko'])==0){
  echo "Wypłenij dane";
}
else {
  echo "Imie i nazwisko: $_POST[imie]  $_POST[nazwisko]";
} */


 ?>
=======
<?php
if (!empty($_GET['name']) AND !empty($_GET['surname'])){
  // echo $_GET['name'];
  if (ctype_upper(($_GET['name'])[0]) && ctype_upper(($_GET['surname'])[0])){
    $imie=substr($_GET['name'],0,10);
    $nazwisko=substr($_GET['surname'],0,10);
    echo <<< L
    imię: $imie<br>
    Nazwisko: $nazwisko<br>
    L;
  }
  else {
    echo "Wypełnij z dużej litery!";
  }
}else {
      echo "Wypełnij wszystkie dane ;)";
}

/* if(strlen($_POST['imie'])>10 || strlen($_POST['nazwisko'])>10){
  echo "Za dużo znaków";
}
elseif(($_POST['imie'])!=ucfirst($_POST['imie']) || substr($_POST['imie'],1)!=strtolower(substr($_POST['imie'],1))){
  echo "Pierwsza litera imienia musi być duża a reszta liter mała";
}
elseif(($_POST['nazwisko'])!=ucfirst($_POST['nazwisko'])  || substr($_POST['nazwisko'],1)!=strtolower(substr($_POST['nazwisko'],1))){
  echo "Pierwsza litera nazwiska musi być duża a reszta liter mała";
}
elseif(strlen($_POST['imie'])==0 OR strlen($_POST['nazwisko'])==0){
  echo "Wypłenij dane";
}
else {
  echo "Imie i nazwisko: $_POST[imie]  $_POST[nazwisko]";
} */


 ?>
>>>>>>> 3f38c779edb040ba80be75f97c3719d8e5a2c00c
