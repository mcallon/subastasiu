<?php
/**
 * Interfaz general de las fachadas.
 * @author Miguel Callon
 */
class MultiIdioma {
	public static function init_i18n() {
		$locale = Session::get(LOCALE_KEY);
		$path_locale = PATH."/locale/".$locale."/LC_MESSAGES/messages.properties";
		//echo "path_locale: $path_locale";
		$array = parse_ini_file($path_locale);
		foreach ($array as $index => $value) {
			$properties[$index] = $value;
		}
		Session::set(MULTIIDIOMA_KEY, $properties);
	}
	
	public static function gettexto ($mensaje) {
		$multiIdioma = Session::get(MULTIIDIOMA_KEY);
		echo $multiIdioma[$mensaje]; 
	}
}
?>