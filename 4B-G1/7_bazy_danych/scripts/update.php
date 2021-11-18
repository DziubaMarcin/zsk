<?php
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
      if(empty($value)) {
        header("location: ../5_bazy_tabela_update.php?error=2&info=Wypełnij wszystkie pola w formularzu!&updateUser=");
        exit();
      }
    }
    require_once './connect.php';
    $sql="INSERT INTO `users` (`id`, `cityid`, `name`, `surname`, `birthday`) VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]');";
    $connect->query($sql);
    if ($connect->affected_rows == 1) {
      header("location: ../5_bazy_tabela_update.php?error=2&info=Prawidłowo zaktualizowano użytkownika!");
    }
    else {
      header("location: ../5_bazy_tabela_update.php?error=2&info=Nie zaktualizowano użytkownika!&updateUser=");
    }
    $connect->close();
  }
  else{
    header("location: ../5_bazy_tabela_update.php?error=2&info=Wypełnij wszystkie dane!&updateUser=");
  }
?>
