<form action="<?= $_SERVER['PHP_SELF']?>" method="post">

    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"
            <?php mostrarCampo($_POST['nombre'])?>
               placeholder="Introduce tu nombre">
        <?php mostrarErrorCampo('nombre', $errores);?>
    </p>

    <p>
        <label for="email">Email</label>
        <input type="email" name="email"<?php mostrarCampo($_POST['email'])?>>
        <?php mostrarErrorCampo('email', $errores);?>
    </p>

    <p>
        <label for="clave1">Contraseña</label>
        <input type="password" name="clave1">
            <?php mostrarErrorCampo('clave1', $errores);?>
        </input>
    </p>

    <p>
        <label for="clave2">Repetir Contraseña</label>
        <input type="password" name="clave2">
            <?php mostrarErrorCampo('clave2', $errores);?>
        </input>
    </p>

    <p>
        <label>
            <input type="submit" value="Enviar">
        </label>
    </p>

</form>