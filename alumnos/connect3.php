<?php
/*Conexion a la base de datos*/

$dsn = 'mysql:dbname=azwuser_web;host=127.0.0.1';
$user = 'azwuser_admin';
$password = 'Acuario1936BASE';

try{
	$dbh = new PDO($dsn,$user,$password);
} catch (PDOException $e) {
	echo 'Conexión fallida: '.$e->getMessage();
}
?>