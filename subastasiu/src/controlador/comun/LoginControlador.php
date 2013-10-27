<?php
//namespace controlador;

/**
 * Clase controladora del caso de uso Login
 * @author Miguel Callon
 */
class LoginControlador extends PublicoControlador {
	public function __construct() {
		
	}
	
	/**
	 * Ejecuta las acciones del controlador.
	 */
	protected function ejecutar($accion) {
		switch($accion) {
			case "autenticar":
				$usuario = $_REQUEST["usuario"];
				$usuario = $_REQUEST["clave"];
				
				//TODO Comprobar que es un usuario registrado
				Session::set(IS_AUTENTICADO_KEY, true);
				header('Location: ./index.php');
				break;
			default:
				echo "accionNoEncontrada";
		}
	}
}
?>