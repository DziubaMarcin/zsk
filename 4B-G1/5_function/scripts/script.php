<?php

require_once '../functions/function.php';

show();

if(!empty($_POST['name'])) {
echo "Imię: ".stringValidate($_POST['name'], 4).", długość: ".strlen(stringValidate($_POST['name'], 4));
}
 ?>
