<?php

class Conexion{
	
	/**
	 * @return PDO
	 */

	public static  function getConexion(){
		/*Conexion a la base de datos*/
		$dsn = 'mysql:dbname=azwuser_alumnado;host=127.0.0.1';
		$user = 'root';
		$password = '';
		
		try{
			$dbh = new PDO($dsn,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
		} catch (PDOException $e) {
			echo 'Conexión fallida: '.$e->getMessage();
		}
		return $dbh;
	}
}

?>
