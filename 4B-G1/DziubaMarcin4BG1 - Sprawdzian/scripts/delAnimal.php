<?php
  if(isset($_POST)) {
    require_once "./connect.php";

    $sql = "DELETE FROM `zwierze` WHERE `gatunek_id` = '$_POST[gatunek_id]';";

    $connect->query($sql);

    if ($connect->affected_rows) {
      header("location: ../Animals.php?info=Usunięto zwierzęta.");
    }
    else {
        header("location: ../Animals.php?info=Nie usunięto zwierząt.");
    }
  }
 ?>
