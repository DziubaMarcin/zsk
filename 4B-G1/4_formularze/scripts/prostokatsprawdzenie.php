<<<<<<< HEAD
<?php
      if (!empty($_GET['sideA']) && !empty($_GET['sideB'])){
        $sideA=str_replace(',', '.', $_GET['sideA']);
        $sideB=str_replace(',', '.', $_GET['sideB']);
        if (is_numeric($_GET['sideA']) && is_numeric($_GET['sideB'])){
          $p = $sideA*$sideB;
          echo <<<RESULT
          Pole prostokąta wynosi $p cm <sup>2</sup>
          RESULT;
          $o = 2*$sideA+2*$sideB;
          echo <<< RESULT
          Obwód prostokąta wynosi $o cm
          RESULT;
          }
        else {
          echo "Wartości muszą być liczbami";
        }
        }
        else {
          echo "Wypełnij wszystkie pola!";
        }
     ?>
=======
<?php
      if (!empty($_GET['sideA']) && !empty($_GET['sideB'])){
        $sideA=str_replace(',', '.', $_GET['sideA']);
        $sideB=str_replace(',', '.', $_GET['sideB']);
        if (is_numeric($_GET['sideA']) && is_numeric($_GET['sideB'])){
          $p = $sideA*$sideB;
          echo <<<RESULT
          Pole prostokąta wynosi $p cm <sup>2</sup>
          RESULT;
          $o = 2*$sideA+2*$sideB;
          echo <<< RESULT
          Obwód prostokąta wynosi $o cm
          RESULT;
          }
        else {
          echo "Wartości muszą być liczbami";
        }
        }
        else {
          echo "Wypełnij wszystkie pola!";
        }
     ?>
>>>>>>> 3f38c779edb040ba80be75f97c3719d8e5a2c00c
