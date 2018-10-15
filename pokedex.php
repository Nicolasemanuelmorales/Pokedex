<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Example</title>
</head>
<body>

<div class="cabeza">
	<div class="text1">POKEDEX</div>
	<div class="buscador"> 	
				<form method="POST" action="pokedex.php" >
				<input class="busca" type="text" name="whoisthat" autofocus>
				</form>
	</div>
</div>
<div class="cuerpo">
<?php
$pokemons=Array("Charmander"=>array('tipo' => 'Fuego',
									'tipoimagen' => "<img class='imagenes' src='https://vignette.wikia.nocookie.net/es.pokemon/images/c/ce/Tipo_fuego.gif/revision/latest?cb=20170114100331s'>",

									'genero'=>'Masculino',
									'generoimagen' => "<img class='imagenes2' src='https://png.icons8.com/metro/1600/male.png'>",

									'ataque'=>'Fuego Fatuo',
									

									'foto'=>"<img class='imagenes4' src='https://vignette.wikia.nocookie.net/es.pokemon/images/b/be/Charmander_%28anime_SO%29.png/revision/latest?cb=20120906002506'>",

									'fotoespecifica'=>"<img class='imagenes3' src='https://vignette.wikia.nocookie.net/es.pokemon/images/b/be/Charmander_%28anime_SO%29.png/revision/latest?cb=20120906002506'>"),
				
				"Pikachu"=>array(	'tipo'=>'Electrico',
									'tipoimagen' => "<img class='imagenes' src='https://vignette.wikia.nocookie.net/es.pokemon/images/1/1b/Tipo_el%C3%A9ctrico.gif/revision/latest?cb=20170114100155'>",
									
									'genero'=>'Femenino',
									'generoimagen' => "<img class='imagenes2' src='http://downloadicons.net/sites/default/files/woman-sex-symbol-icon-63284.png'>",

									'ataque'=>'ImpacTrueno',

									'foto'=>"<img class='imagenes4' src='https://vignette.wikia.nocookie.net/new-fantendo/images/7/77/Pikachu.png/revision/latest?cb=20141022175016&path-prefix=es'>",

									'fotoespecifica'=>"<img class='imagenes3' src='https://vignette.wikia.nocookie.net/new-fantendo/images/7/77/Pikachu.png/revision/latest?cb=20141022175016&path-prefix=es'>"),
				
				"Bulbasaur"=>array(	'tipo'=>'Agua',
									'tipoimagen' => "<img class='imagenes' src='https://vignette.wikia.nocookie.net/es.pokemon/images/d/d6/Tipo_planta.gif/revision/latest?cb=20170114100444'>"."<img class='imagenes' src='https://vignette.wikia.nocookie.net/es.pokemon/images/1/10/Tipo_veneno.gif/revision/latest?cb=20170114100535'>",

									'genero'=>'Masculino',
									'generoimagen' => "<img class='imagenes2' src='https://png.icons8.com/metro/1600/male.png'>",

									'ataque'=>'Látigo Cepa',
									

									'foto'=>"<img class='imagenes4' src='https://vignette.wikia.nocookie.net/pokemon-planet/images/5/5b/Bulbasaur_by_elfaceitoso.png/revision/latest?cb=20161115042430'>",

									'fotoespecifica'=>"<img class='imagenes3' src='https://vignette.wikia.nocookie.net/pokemon-planet/images/5/5b/Bulbasaur_by_elfaceitoso.png/revision/latest?cb=20161115042430'>"));



$cont=0;
if (isset($_POST["whoisthat"])) 
{
	$buscado= $_POST["whoisthat"];
	$buscado= strtolower($buscado);
	$buscado= ucfirst($buscado);
	$cont=0;
	  
	foreach ($pokemons as $filanombre2 => $contenido2)  {
	if ($filanombre2 == $buscado) 
		{
	  	echo 
	  		"<div class='elegido'>".
	  			"<div class='elegido2'>".$pokemons[$buscado]["tipo"]."</div>".
	  			"<div class='imagentipo'>".$pokemons[$buscado]["tipoimagen"]."</div>".
	  		"</div>".

	  		"<div class='elegido'>".
	  			"<div class='elegido2'>".$pokemons[$buscado]["genero"]."</div>".
	  			"<div class='imagentipo'>".$pokemons[$buscado]["generoimagen"]."</div>".
	  		"</div>".

	  		"<div class='elegido'>".
	  			"<div class='elegido2'>".$pokemons[$buscado]["ataque"]."</div>".
	  		"</div>".

	  		"<div class='elegidofoto'>".
	  			"<div class='elegido3'>".$pokemons[$buscado]["fotoespecifica"]."</div>".
	  		"</div>";
	  		$cont++;
	  	}
	  }
	  		if ($cont==0) 
	  		{
	  			Todos ($pokemons);
	  			$cont++;
	  		}
}  
if ($cont==0) 
	  		{
	  			Todos ($pokemons);
	  		}

Function Todos ($pokemons){
	foreach ($pokemons as $filanombre => $contenido) 
	  		{	
				
				echo
				"<div class='caja'>".
	  			"<div class='poke'>".$filanombre."</div>".
	  			"<div class='imggeneral'>".$contenido["foto"]."</div>".
	  			"</div>";
			}}
?>

</div>

</body>
</html>