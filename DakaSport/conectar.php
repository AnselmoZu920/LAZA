<?php
$servername = "localhost";
$username = "id16860893_root";
$password = "-OmIO5mcIZmQ[ipr";
$database="id16860893_registro";
try {
	$bd = new PDO(
		'mysql:host=localhost;
		dbname='.$database,
		$username,
		$password,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (Exception $e){
	echo "Error de Coneccion ".$e->getMessage();
}
?>
