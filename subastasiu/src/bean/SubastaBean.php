<?php
/**
 * Clase que almacena los datos de una subasta.
 * @author Miguel Callon
 */
class SubastaBean {
	var $id;
	var $nombre;
	var $precio;
	public function __construct($id, $nombre, $precio) {
		$this->id = $id;
		$this->nombre = $nombre;
		$this->precio = $precio;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getNombre() {
		return $this->nombre;
	}
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	public function getPrecio() {
		return $this->precio;
	}
	public function setPrecio($precio) {
		$this->precio = $precio;
	}
	public function __toString() {
		return "SubastaBean: id:".$this->id.
			 ", Nombre".$this->nombre.
			 ", Precio:.".$this->precio;
	}
}
?>