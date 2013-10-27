<?php
	include HTML_PUBLICA_PATH."/cabecera.php";
	include HTML_PUBLICA_PATH."/menu.php";
?>

<p>P&aacute;gina de inicio</p>

<h2>Autenticarse:</h2>
<form action="index.php" >
	Usuario: <input type="text" name="usuario" /><br/>
	Clave: <input type="text" name="clave" /><br/>
	<input type="hidden" name="controlador" value="LoginControlador" />
	<input type="submit" name="accion" value="autenticar" />
</form>

<?php
	include HTML_PUBLICA_PATH."/pie.php";
?>