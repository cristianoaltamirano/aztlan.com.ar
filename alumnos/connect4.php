<?php
/*Conexion a la base de datos*/

$dsn = 'mysql:dbname=cewuser_astro;host=127.0.0.1';
$user = 'cewuser_admin';
$password = 'Acuario1936BASE';

try{
	$dbh2 = new PDO($dsn,$user,$password);
} catch (PDOException $e) {
	echo 'Conexión fallida: '.$e->getMessage();
}
?>