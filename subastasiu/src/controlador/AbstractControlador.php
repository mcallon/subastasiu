<?php
/**
 * Clase que almacena los metodos comunes de los controladores.
 * @author Miguel Callon
 */
abstract class AbstractControlador {
	abstract protected function ejecutar($accion);
	abstract protected function accion($accion);
}
?>