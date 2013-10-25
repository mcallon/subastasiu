<?php
/**
 * Interfaz que define los metodos que realizaran
 * consultas sobre la base de datos relacionado con la entidad
 * correspondiente.
 * @author Miguel Callon
 */
interface ISubastaDAO extends IDAO {
	public function crearSubasta(SubastaBean $subasta);
}
?>