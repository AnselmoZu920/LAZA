<?php
 if (!isset($_GET['id'])) {
 	header('Location: crud.php');
 }
 include 'conectar.php';
  $idd = $_GET['id'];

  $sentencia = $bd->prepare("SELECT * FROM datos WHERE ID = ?;");
  $sentencia->execute([$idd]);
  $persona = $sentencia->fetch(PDO::FETCH_OBJ);
  //print_r($persona)
?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
		body{background-color: black ; }
		.form{
    width: 400px;
    padding: 0px;
    margin: auto;
    margin-top: 20px;
    background: #000000;
    border-radius: 4px;
}
.cajas{
	position: relative;
    width: 100%;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 2px;
    border: 3px solid #80FF00;
    border-left: 10px solid #00000;
    transition: all .2s ease;
}
.cajas:hover, .cajas:focus{
    border-left: 10px solid #80FF00;
}
.text{
	color: #FFFFFF;
}
.editar{
    width: 150px;
    padding: 10px;
    color: #80FF00;
    background-color: #000000;
    border: 1px solid #FFFFFF;
  }

	</style>
	<title>Editar Datos</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="video1.jpg">
</head>
<body>
	<center>
		<h3 class="text">Editar datos:</h3>
		<form method="POST" action="editarProceso.php">
			<table>
				<tr>
					<td class="text">Usuario:</td>
					<td><input class="cajas" type="text" name="txt2usuario" value="<?php echo $persona->Usuario; ?>"></td>
				</tr>
				<tr>
					<td class="text">Email:</td>
					<td><input class="cajas" type="text" name="txt2email" value="<?php echo $persona->Email; ?>"></td>
				</tr>
				<tr>
					<td class="text">ID:</td>
					<td><input class="cajas" type="text" name="txt2id" value="<?php echo $persona->ID; ?>"></td>
				</tr>
				<tr>
					<input type="hidden" name="oculto">
					<td colspan="2"><input class="editar" type="submit" value="EDITAR DATOS"></td>
				</tr>
			</table>
		</form>

	</center>
</body>
</html>