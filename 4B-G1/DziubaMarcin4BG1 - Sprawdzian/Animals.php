<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title></title>
  </head>
  <body>

<?php

  echo <<< ANCHORS
    <a href="./Animals.php?table=">TABELA</a><br>
    <a href="./Animals.php?add=">DODAJ</a><br>
    <a href="./Animals.php?del=">USUŃ</a><br>
  ANCHORS;

  if (isset($_GET['info'])) {
    echo $_GET['info'];
  }

  if (isset($_GET['table'])) {
    require './scripts/connect.php';

    $sql = "SELECT * FROM `zwierze` LEFT JOIN `gatunek` ON `zwierze`.`gatunek_id` = `gatunek`.`gatunek_id`;";

    $result = $connect->query($sql);

    echo <<< TABLE
      <table>
        <tr>
          <th>ID</th>
          <th>Nazwa</th>
          <th>Gatunek</th>
          <th>Data dodania</th>
        <tr>
      TABLE;

    while ($row=$result->fetch_assoc()) {
      echo <<< ROW
        <tr>
          <td>$row[id]</td>
          <td>$row[nazwa]</td>
          <td>$row[gatunek]</td>
          <td>$row[data_dodania]</td>
        </tr>
      ROW;
    }

    echo <<< TABLE
      </table>
    TABLE;

    $connect->close();
  }

  if (isset($_GET['add'])) {
    require './scripts/connect.php';

    $sql = "SELECT * FROM `gatunek`";

    $result = $connect->query($sql);

    echo <<< FORM
      <form action="./scripts/addAnimal.php" method="post">
        <input type="text" name="nazwa" placeholder="Nazwa Zwierzęcia"><br>
        <select name="gatunek_id">
    FORM;

    while ($row=$result->fetch_assoc()) {
      echo "<option value=\"$row[gatunek_id]\">$row[gatunek]</option>";
    }

    echo <<< FORM
        </select><br>
        <input type="submit" value="Dodaj">
      <form>
    FORM;

  }

  if (isset($_GET['del'])) {
    require './scripts/connect.php';

    $sql = "SELECT * FROM `gatunek`";

    $result = $connect->query($sql);

    echo <<< FORM
      <form action="./scripts/delAnimal.php" method="post">
        <select name="gatunek_id">
    FORM;

    while ($row=$result->fetch_assoc()) {
      echo "<option value=\"$row[gatunek_id]\">$row[gatunek]</option>";
    }

    echo <<< FORM
        </select>
        <input type="submit" value="Usuń">
      </form>
    FORM;

    $connect->close();

  }


?>

  </body>
</html>
