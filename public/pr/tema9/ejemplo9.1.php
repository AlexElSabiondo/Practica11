<?php

$fuente = fopen("lista.txt", "a+");

fwrite($fuente, "Hola Mundo!!\n");

$fuente = fopen('lista.txt', 'a+');
fwrite($fuente, "Esta es otra línea\n");

fclose($fuente);

?>