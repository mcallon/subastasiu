<?php
/**
 * Clase de la que extienden los controladores de casos de uso
 * de la parte privada y de administracion.
 * @author Miguel Callon
 */
abstract class PrivadoControlador extends AbstractControlador {
	private function isAutenticado() {
		// TODO Implementar
	}
		
	public function accion($accion) {
		$this->isAutenticado();
		$conexionBD = new MysqlDAO();
		try {
			// Abrimos la conexion contra la base de datos
			$conexionBD->connectarBD();
			$conexionBD->abrirTransaccion();
		
			$this->ejecutar($accion);
			
			$conexionBD->commit();
			$conexionBD->desconectarBD();
		} catch (Exception $ex) {
			$conexionBD->rollback();
			$conexionBD->desconectarBD();
			throw $ex;
		} 
		// Cerramos la conexion
	}
}
?>