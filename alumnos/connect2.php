<?php
/*Conexion a la base de datos*/

$dsn = 'mysql:dbname=azwuser_usuarios;host=127.0.0.1';
$user = 'azwuser_admin';
$password = 'Acuario1936BASE';

try{
	$dbh = new PDO($dsn,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
	echo 'Conexión fallida: '.$e->getMessage();
}
?>