<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

    Nombre: <input  type="text" name="nombre" <?php mostrar_campos_introducidos('nombre'); ?> placeholder="Alejandro">
    <?php mostrar_error($errores, 'nombre'); ?> <br> <br>

    Apellidos: <input type="text" name="apellidos" <?php mostrar_campos_introducidos('apellidos'); ?> placeholder="Garay López">
    <?php mostrar_error($errores, 'apellidos'); ?> <br> <br>

    Email: <input type="email" name="email" <?php mostrar_campos_introducidos('email'); ?> placeholder="ejemplo@gmail.com">
    <?php mostrar_error($errores, 'email'); ?> <br> <br>

    Teléfono: <input type="tel" name="telefono" <?php mostrar_campos_introducidos('telefono'); ?> placeholder="622408292">
    <?php mostrar_error($errores, 'telefono'); ?> <br> <br>

    Fecha: <input type="date" name="fecha" <?php mostrar_campos_introducidos('fecha'); ?>>
    <?php mostrar_error($errores, 'fecha'); ?> <br> <br>

    <?php mostrar_hora(); ?>

    <?php mostrar_error($errores, 'hora'); ?> <br> <br>

    <input type="submit" name="reservar" value="Reservar">

</form>