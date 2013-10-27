<?php
	/**
	 * Definimos el path de los ficheros php del sistema.
	 * @author Miguel Callon
	 */
	//Definimos las rutas que vamos a utilizar en el plugin, en este caso seguimos un patrón MVC
	define( 'APP_PATH',        PATH . '' );
	define( 'HTML_PATH', APP_PATH . '/html' );
	define( 'HTML_PUBLICA_PATH', HTML_PATH . '/publica' );
	define( 'HTML_PUBLICA_SUBASTAS_PATH', HTML_PUBLICA_PATH . '/subastas' );
	define( 'HTML_PRIVADA_PATH', HTML_PATH . '/privada' );
	define( 'HTML_PRIVADA_SUBASTAS_PATH', HTML_PRIVADA_PATH . '/subastas' );
	define( 'HTML_ADMIN_PATH', HTML_PATH . '/admin' );
	
	define( 'CONTROLLER_PATH', APP_PATH . '/controlador' );
	define( 'CONTROLLER_SUBASTAS_PATH', CONTROLLER_PATH . '/subastas' );
	define( 'CONTROLLER_COMUN_PATH', CONTROLLER_PATH . '/comun' );
	define( 'FACHADA_PATH',    APP_PATH . '/fachada' );
	define( 'DAO_PATH',        APP_PATH . '/dao' );
	define( 'BEAN_PATH',        APP_PATH . '/bean' );
	define( 'EXCEPCIONES_PATH',        APP_PATH . '/excepciones' );
	define( 'EXCEPCIONES_DAO_PATH',        EXCEPCIONES_PATH . '/dao' );
	define( 'EXCEPCIONES_FACHADA_PATH',        EXCEPCIONES_PATH . '/fachada' );
	define( 'EXCEPCIONES_CONTROLADOR_PATH',        EXCEPCIONES_PATH . '/controlador' );
	define( 'UTILES_PATH',        APP_PATH . '/utiles' );
	define( 'TEST_PATH',        APP_PATH . '/test' );
	
	function autoload( $className ) {
	 // Convert class name to filename format.
	 //$class_name = strtolower( $className );
	 $paths = array(
	   CONTROLLER_PATH,
	   CONTROLLER_SUBASTAS_PATH,
	   CONTROLLER_COMUN_PATH,
	   FACHADA_PATH,
	   DAO_PATH,
	   BEAN_PATH,
	   EXCEPCIONES_PATH,
	   EXCEPCIONES_DAO_PATH,
	   EXCEPCIONES_FACHADA_PATH,
	   EXCEPCIONES_CONTROLADOR_PATH,
	   UTILES_PATH,
	   TEST_PATH
	 );
	 
	 // Buscamos en cada ruta los archivos
		foreach( $paths as $path ) {
			//echo "cargar: $path/$className.php";
			if( file_exists( "$path/$className.php" ) ) {
			   require_once( "$path/$className.php" );
			}
		}
	}
	spl_autoload_register( 'autoload' );
?>