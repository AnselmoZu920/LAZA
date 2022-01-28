<?php 
//print_r($_GET);
if (!isset($_GET['id'])) {
 		exit();
 }
 $codigo = $_GET['id'];
 include 'conectar.php';
 $sentencia = $bd->prepare("DELETE FROM datos WHERE ID = ?;");
 $resultado = $sentencia->execute([$codigo]);
 if ($resultado === TRUE) {
 		header('Location: crud.php');
 	} else {
 		echo "Ocurrio un Error";
 	}
?>