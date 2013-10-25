<?php
/**
 * Clase utilidad que permite validar los campos de los formularios.
 * @author Miguel Callon
 */
class ValidarCampos {
	/**
	 * Valida si los datos de la subasta estan correctamente rellenados
	 * antes de crear una subasta.
	 */
	public static function validarCrearSubasta(SubastaBean $subasta) {
		$errores;
		if ($subasta->getNombre() == "") {
			$errores["nombre"] = "mensaje1";
		}
		if ($subasta->getPrecio() == "") {
			$errores["precio"] = "mensaje2";
		}
		if (isset($errores)) {
			//echo "error: ".$errores["nombre"];
			$ex = new SubDatosIncFacEx();
			$ex->setErrores($errores);
			throw $ex;
		}
		return true;
	}
}
?>