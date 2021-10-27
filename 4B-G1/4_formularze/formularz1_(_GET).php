<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkowników</h3>
    <form method="get">
      <input type="text" name="name" placeholder="Podaj imie"><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br>
      <input type="submit" value="zatwierdź">
    </form>
    <?php
      if (!empty($_GET['name']) && !empty($_GET['surname'])) {
        echo <<< L
        Imię: {$_GET['name']}<br>
        Nazwisko: $_GET[surname]<br>
L;
  }else {
    echo "Wypełnij wszystkie dane :)";
  }
    ?>
  </body>
</html>
=======
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkowników</h3>
    <form method="get">
      <input type="text" name="name" placeholder="Podaj imie"><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br>
      <input type="submit" value="zatwierdź">
    </form>
    <?php
      if (!empty($_GET['name']) && !empty($_GET['surname'])) {
        echo <<< L
        Imię: {$_GET['name']}<br>
        Nazwisko: $_GET[surname]<br>
L;
  }else {
    echo "Wypełnij wszystkie dane :)";
  }
    ?>
  </body>
</html>
>>>>>>> 3f38c779edb040ba80be75f97c3719d8e5a2c00c
