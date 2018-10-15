<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="recursos/css/estilo.css">
	<title>Example</title>
</head>
<body>

	<div class="cabeza">
		<div class="text2"><a href="login.php"> Iniciar Sesion </a></div>
		<div class="text1">POKEDEX</div>
		<div class="buscador"> 	
			<form method="POST" action="index.php" >
				<input class="busca" type="text" name="whoisthat" autofocus>
			</form>
		</div>
	</div>
	<div class="cuerpo">
		<?php

		$conn = mysqli_connect("127.0.0.1","root","","Pokemons_Morales_Nicolas");
		
		$cont=0;
		if (isset($_POST["whoisthat"])) 
		{
			$buscado= $_POST["whoisthat"];
			$buscado= strtolower($buscado);
			$buscado= ucfirst($buscado);
			$cont=0;


			$sql = 'select * 
			from Pokemon';
			$result=mysqli_query($conn, $sql);
			while($asd=mysqli_fetch_assoc($result)){

				if ($asd["Descripcion"] == $buscado) 
				{

					$sql = "select P.Descripcion Pokemon, P.Ataque, P.Imagen,G.Descripcion Genero,T.Descripcion Tipo,T.Imagen Imgtipo, G.Imagen Imggenero  
					from Pokemon P 	join Genero G on G.id=P.Id_Genero 
					Join Poke_Tipo PT on PT.Id_Pokemon=P.Id
					Join Tipo T on T.Id=PT.Id_Tipo
					Where P.Descripcion='$buscado'";

					$result=mysqli_query($conn, $sql);

					$rows=mysqli_fetch_assoc($result);

					echo 
					"<div class='elegido'>".
					"<div class='elegido2'>".$rows['Pokemon']."</div>".
					"<div class='imagentipo'>"."<img class='imagenes' src=".$rows['Imgtipo'].">"."</div>".
					"</div>".

					"<div class='elegido'>".
					"<div class='elegido2'>".$rows['Genero']."</div>".
					"<div class='imagentipo'>"."<img class='imagenes2' src=".$rows['Imggenero'].">"."</div>".
					"</div>".

					"<div class='elegido'>".
					"<div class='elegido2'>".$rows['Ataque']."</div>".
					"</div>".

					"<div class='elegidofoto'>".
					"<div class='elegido3'>"."<img class='imagenes3' src=".$rows['Imagen'].">"."</div>".
					"</div>";
					$cont++;
				}} 
				
				if ($cont==0) 
				{
					echo "<div class='pne'>".'¡ POKEMON NO ENCONTRADO !'."</div>";
					$sql = 'select * 
					from Pokemon';

					$result=mysqli_query($conn, $sql);

					while($rows=mysqli_fetch_assoc($result))
					{

						$imagen=$rows['Imagen'];
						echo
						"<div class='caja'>".
						"<div class='poke'>".$rows['Descripcion']."</div>".
						"<div class='imggeneral'>"."<img class='imagenes4' src=".$imagen.">"."</div>".
						"</div>";
					}	
					$cont++;	  		
				}
				
			}
			if ($cont==0) 
			{
				$sql = 'select * 
				from Pokemon';

				$result=mysqli_query($conn, $sql);

				while($rows=mysqli_fetch_assoc($result))
				{
					$imagen=$rows['Imagen'];
					echo
					"<div class='caja'>".
					"<div class='poke'>".$rows['Descripcion']."</div>".
					"<div class='imggeneral'>"."<img class='imagenes4' src=".$imagen.">"."</div>".
					"</div>";
				}	
			}
			?>
		</div>

	</body>
	</html>