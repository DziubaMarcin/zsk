<<<<<<< HEAD
<?php
echo ("<pre>");
print_r ($_POST);
echo ("</pre>");
if (!empty($_POST['name']) && !empty($_POST['geometricFigure'])){
  switch ($_POST['geometricFigure']) {
    case 'Kwadrat':
      header('location: ./../kwadrat.php');
      break;
    case 'Prostokąt':
      header('location: ./../prostokat.php');
      break;
  }
}
else{
?>
  <script>
    history.back();
  </script>
<?php
}
?>
=======
<?php
echo ("<pre>");
print_r ($_POST);
echo ("</pre>");
if (!empty($_POST['name']) && !empty($_POST['geometricFigure'])){
  switch ($_POST['geometricFigure']) {
    case 'Kwadrat':
      header('location: ./../kwadrat.php');
      break;
    case 'Prostokąt':
      header('location: ./../prostokat.php');
      break;
  }
}
else{
?>
  <script>
    history.back();
  </script>
<?php
}
?>
>>>>>>> 3f38c779edb040ba80be75f97c3719d8e5a2c00c
