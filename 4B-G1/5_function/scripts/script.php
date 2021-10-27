<<<<<<< HEAD
<?php

require_once '../functions/function.php';

show();

if(!empty($_POST['name'])) {
echo "Imię: ".stringValidate($_POST['name'], 4).", długość: ".strlen(stringValidate($_POST['name'], 4));
}
 ?>
=======
<?php

require_once '../functions/function.php';

show();

if(!empty($_POST['name'])) {
echo "Imię: ".stringValidate($_POST['name'], 4).", długość: ".strlen(stringValidate($_POST['name'], 4));
}
 ?>
>>>>>>> 3f38c779edb040ba80be75f97c3719d8e5a2c00c
