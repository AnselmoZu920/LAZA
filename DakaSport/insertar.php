<?php 
 if (!isset($_POST['oculto'])) {
 		exit();
 }

 	include 'conectar.php';
 	$usuario = $_POST['txtusuario'];
 	$email = $_POST['txtemail'];
 	$id = $_POST['txtid'];
 	$sentencia = $bd->prepare("INSERT INTO datos(Usuario,Email,ID) VALUES (?,?,?);");
 	$resultado = $sentencia->execute([$usuario,$email,$id]);

 	if ($resultado === TRUE) {
 		header('Location: crud.php');
 	} else {
 		echo "Ocurrio un Error";
 	}
?>