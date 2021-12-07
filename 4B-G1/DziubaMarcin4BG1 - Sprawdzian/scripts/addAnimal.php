<?php
  if(isset($_POST)) {
    require_once "./connect.php";

    $sql = "INSERT INTO `zwierze` VALUES (NULL, '$_POST[gatunek_id]', '$_POST[nazwa]', NULL);";

    $connect->query($sql);

    if ($connect->affected_rows) {
      header("location: ../Animals.php?info=Dodano zwierzę.");
    }
    else {
        header("location: ../Animals.php?info=Nie dodano zwierzęcia.");
    }
  }
 ?>
