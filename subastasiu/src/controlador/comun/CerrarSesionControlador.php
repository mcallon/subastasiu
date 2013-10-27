<?php
//namespace controlador;

/**
 * Clase controladora del caso de uso CerrarSesion
 * @author Miguel Callon
 */
class CerrarSesionControlador extends PublicoControlador {
	public function __construct() {
		
	}
	
	/**
	 * Ejecuta las acciones del controlador.
	 */
	protected function ejecutar($accion) {
		switch($accion) {
			case "cerrar":
				Session::set(IS_AUTENTICADO_KEY, false);
				header('Location: ./index.php');
				break;
			default:
				echo "accionNoEncontrada";
		}
	}
}
?>