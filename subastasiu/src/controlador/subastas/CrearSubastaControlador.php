<?php
//namespace controlador;

/**
 * Clase controladora del caso de uso Subasta
 * @author Miguel Callon
 */
class CrearSubastaControlador extends PrivadoControlador {
	public function __construct() {
		
	}
	
	/**
	 * Ejecuta las acciones del controlador.
	 */
	protected function ejecutar($accion) {
		switch($accion) {
			case "mostrarFormulario":
				// Muestra el formulario de subastas
				include (HTML_PRIVADA_SUBASTAS_PATH."/crearSubasta.php");
				break;
			case "crearSubasta":
				$nombre = $_REQUEST["nombre"];
				$precio = $_REQUEST["precio"];
				$subasta = new SubastaBean("", $nombre, $precio);
				
				// La factoria devuelve un objeto factoria de la fachada publica
				$fachada = FactoriaFachada::getPrivadaFachada();
				try {
					$fachada->crearSubasta($subasta);
					include (HTML_PRIVADA_SUBASTAS_PATH."/subastaCreada.php");
				} catch (SubDatosIncFacEx $ex) {
					$ERRORES_FORM = $ex->getErrores();
					include (HTML_PRIVADA_SUBASTAS_PATH."/crearSubasta.php");
				} catch (CrearSubastaFacEx $ex) {
					$ERRORES_FORM["error"] = "Error desconodio";
					include (HTML_PRIVADA_SUBASTAS_PATH."/crearSubasta.php");
				}
				
				break;
			default:
				echo "accionNoEncontrada";
				break;
		}
	}
}
?>