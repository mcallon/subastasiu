<?php
	/**
	 * Constantes del programa.
	 * @author Miguel Callon
	 */
	 // Se utiliza para consultar en la sesion si el usuario conectado
	 // esta autenticado
	 define( 'IS_AUTENTICADO_KEY',  'IS_AUTENTICADO_KEY');
	 // Para consultar en la sesion si el usuario conectado es 
	 // administrador
	 define( 'IS_ADMIN_KEY',  'IS_ADMIN_KEY');
	 
	 // MULTIIDIOMA
	 // Para introducir en la sesion el LOCALE del idioma
	 define( 'LOCALE_KEY', 'LOCALE_KEY');
	 // Para almacenar en la sesion los textos de idiomas.
	 define( 'MULTIIDIOMA_KEY', 'MULTIIDIOMA_KEY');
	 // El LOCALE a utilizar en caso de no especificar ninguno
	 define( 'LOCALE_DEFAULT', 'es_ES');
?>