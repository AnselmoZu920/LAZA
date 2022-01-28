<?php
 //print_r($_POST);
if (!isset($_POST['oculto'])) {
 	header('Location: crud.php');
 }
 include 'conectar.php';
 $usuario2 = $_POST['txt2usuario'];
 $email2 = $_POST['txt2email'];
 $id2 = $_POST['txt2id'];

 $sentencia = $bd->prepare("UPDATE datos SET Usuario = ?, Email = ? WHERE ID = ?");
 $resultado = $sentencia->execute([$usuario2,$email2,$id2]);
 if ($resultado === TRUE) {
 		header('Location: crud.php');
 	} else {
 		echo "Ocurrio un Error";
 	}
?>