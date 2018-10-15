<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="recursos/css/estilo.css">
</head>
<body>

<div class="cajita">
	<form action="login.php" name="form" method="post" >

		<div class="box1">
			<div class="box2">Usuario:</div>
			<div class="box3"><input class="inputform" type="text" id="login" name="login"></div>
		</div>

		<div class="box1">
			<div class="box2">Contraseña:</div>
	        <div class="box3"> <input class="inputform" type="contrasena" id="contrasena" name="contrasena"></div>
		</div><br>

		<input class="bot" type="submit" name="enviar" value="Enviar">
	</form>
</div>
<?php

if(isset($_POST["enviar"])){
	
	$login=$_POST['login'];
	$login= strtolower($login);
	$contrasena=$_POST["contrasena"];
	
	if($login=="admin" && ($contrasena=="123")){
		$_SESSION["logeo"];

		header("location:loginok.php");
	}
	else{
		echo "<div class='incorrecto'>"."Usuario / Contraseña Incorrecto"."</div>";
	}
}
?>

</body>
</html>