<?php
/**
 * Clase que implementa los metodos de la fachada privada.
 * @author Miguel Callon
 */
class PrivadaFachada extends AbstractFachada implements IPrivadaFachada {
	function crearSubasta($subasta) {
		// Comprobamos que los campos son correctos
		ValidarCampos::validarCrearSubasta($subasta);
		
		// Llamamos al DAO para e insertamos
		$subastaDAO = new SubastaDAO();
		try {
			$subastaDAO->crearSubasta($subasta);
		} catch (CrearSubastaDAOEx $ex) {
			throw new CrearSubastaFacEx($ex->getMessage());
		}
	}
}
?>