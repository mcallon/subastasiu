<?php
	include HTML_PRIVADA_PATH."/cabecera.php";
	include HTML_PRIVADA_PATH."/menu.php";
?>

<form action="index.php" />
	<input type="text" name="nombre" value=""><?php echo $ERRORES_FORM["nombre"] ?>
	<input type="text" name="precio" value=""><?php echo $ERRORES_FORM["precio"] ?>
	<input type="hidden" name="controlador" value="CrearSubastaControlador" />
	<input type="submit" name="accion" value="crearSubasta" />
</form>

<?php
	include HTML_PRIVADA_PATH."/pie.php";
?>