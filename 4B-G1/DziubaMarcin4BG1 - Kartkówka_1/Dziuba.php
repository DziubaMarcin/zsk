<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--Dodaj formularz z kolorem (type color) i swoim nazwiskiem (type text). Użytkownik po zatwierdzeniu formulaza będzie przekierowany do strony dane.php w sposób mniej bezpieczny.
     Na stronie dane.php sprawdź czy oba pola były wypełnione - jeśli nie to cofnij do strony głównej i wyświetl komunikat "wypełnij pola",
      jeśli dane zostaną prawidłowo wprowadzone to sprawdzamy czy nazwisko to Nowak, jeśli tak to wyświetl w heredoc informacje "witaj na stronie Nowak; twój ulubiony kolor [wyświetlony kolor],i zamieniamy w w nazwisku na gwiazdkę
      keśli nazwisko nie będzie "Nowak" to również wyświetl nazwisko i kolor, umożliwi użytkownikowi powrót do stroy głównej hiperłącze -->
      <form action="./skrypty/dane.php" method="get">
        <input type="text" name="nazwisko" placeholder="Podaj Nazwisko">
        <input type="color" name="kolor">
        <input type="submit" value="zatwierdź">
      </form>
    <?php

    if (isset($_GET['blad'])){
      echo "Wprowadź poprawne dane";
    }

    ?>
  </body>
</html>
