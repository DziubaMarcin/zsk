<?php
    foreach ($_POST as $key => $value) {
      if(empty($value)) {
        header("location: ../5_bazy_tabela_update.php?error=2&info=Wypełnij wszystkie pola w formularzu!");
        exit();
      }
    }
    require_once './connect.php';

    $sql="UPDATE `users` SET `cityid` = '$_POST[cityid]', `name` = '$_POST[name]', `surname` = '$_POST[surname]', `birthday` = '$_POST[birthday]' WHERE `users`.`id` = '$_GET[id]';";
    $connect->query($sql);

    if ($connect->affected_rows == 1) {
      header("location: ../5_bazy_tabela_update.php?error=2&info=Prawidłowo zaktualizowano użytkownika!");
    }
    else {
      header("location: ../5_bazy_tabela_update.php?error=2&info=Nie zaktualizowano użytkownika!&updateUser=$_GET[id]");
    }
    
    $connect->close();
?>
