<form action="" method="post">
    Cita 1<input type="checkbox" name="cita1" value="pasada">
    <input type="submit" value="Hola">
</form>

<?php

$cita1 = $_POST['cita1'];

var_dump($cita1);

?>