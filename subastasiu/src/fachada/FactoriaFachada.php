<?php
/**
 * Clase que implementa los metodos de la factoria de fachadas.
 * @author Miguel Callon
 */
class FactoriaFachada implements IFactoriaFachada {
	private static $privadaFachada = null;
	private static $publicaFachada = null;
	private static $adminFachada = null;
	
	public static function getPrivadaFachada() {
		if (!isset(static::$privadaFachada)) {
			static::$privadaFachada = new PrivadaFachada();
		}
		return static::$privadaFachada;
	}
	public static function getPublicaFachada() {
		
	}
	public static function getAdminFachada() {
		
	}
}
?>