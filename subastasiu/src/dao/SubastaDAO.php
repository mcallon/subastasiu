<?php
/**
 * Clase que implementa los metodos de base de datos contra MySQL.
 * @author Miguel Callon
 */
class SubastaDAO extends MysqlDAO implements ISubastaDAO {
	public function crearSubasta(SubastaBean $subasta) {
		//echo "<br/>insertar:".$subasta->toString();
		$sql =" insert into Usuarios (Login, Dni)
			 values ('".$subasta->getNombre()."','".$subasta->getPrecio()."')";
        //echo $sql;
        try {
        	mysql_query($sql);
		} catch (Exception $ex) {
			throw new CrearSubastaDAOEx($ex->getMessage());
		}
	}
}
?>