<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkowników</h3>
    <form method="post">
      <input type="text" name="name" placeholder="Podaj imie"><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br>
      <input type="submit" value="zatwierdź">
    </form>
    <?php
      //if (!empty($_GET['name']) && !empty($_GET['surname'])) {
      if (!empty($_POST['name']) && !empty($_POST['surname'])) {
        //echo $_GET["name"];
        echo <<< L
        Imię: {$_POST['name']}<br>
        Nazwisko: $_POST[surname]<br>
L;
  }else {
    echo "Wypełnij wszystkie dane :)";
  }
    ?>
  </body>
</html>
