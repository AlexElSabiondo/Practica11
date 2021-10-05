<form action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">

    <?php  mostrar_citas(separar_citas()); ?>

    <input type="submit" value="Actualizar citas"> <br>

    <h5><a href="./menuPrincipal.php">Volver al menú principal</a></h5>

</form>