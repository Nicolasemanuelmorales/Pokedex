Create Database Pokedex;
Use Pokedex;

Create Table Genero(
Id Tinyint PRIMARY KEY,
Descripcion Varchar (10),
Imagen Varchar(500));

Create Table Tipo(
Id Tinyint PRIMARY KEY,
Descripcion Varchar (10),
Imagen Varchar(500));

Create Table Pokemon(
Id Tinyint PRIMARY KEY,
Descripcion Varchar (10),
Ataque Varchar (50),
Imagen Varchar(500),
Id_Genero Tinyint,
FOREIGN KEY (Id_Genero) references Genero (Id));

Create Table Poke_Tipo (
Id_Tipo Tinyint,
Id_Pokemon Tinyint,
FOREIGN KEY (Id_Tipo ) references Tipo (Id),
FOREIGN KEY (Id_Pokemon) references Pokemon (Id));



Insert into Genero (Id, Descripcion, Imagen)
Values 	
(1,"Masculino"," http://downloadicons.net/sites/default/files/woman-sex-symbol-icon-63284.png"),
(2,"Femenino"," https://png.icons8.com/metro/1600/male.png");

Insert Into Tipo (Id, Descripcion, Imagen)
Values 
(1,"Fuego","https://vignette.wikia.nocookie.net/es.pokemon/images/c/ce/Tipo_fuego.gif/revision/latest?cb=20170114100331s"),
(2,"Electrico","https://vignette.wikia.nocookie.net/es.pokemon/images/1/1b/Tipo_el%C3%A9ctrico.gif/revision/latest?cb=20170114100155"),
(3,"Agua"," https://vignette.wikia.nocookie.net/pokemon-planet/images/5/5b/Bulbasaur_by_elfaceitoso.png/revision/latest?cb=20161115042430");

Insert Into Pokemon (Id, Descripcion, Ataque, Imagen, Id_Genero)
Values  
(1,"Charmander","Fuego Fatuo", "https://vignette.wikia.nocookie.net/es.pokemon/images/b/be/Charmander_%28anime_SO%29.png/revision/latest?cb=20120906002506",1),
(2,"Pikachu","ImpacTrueno","https://vignette.wikia.nocookie.net/new-fantendo/images/7/77/Pikachu.png/revision/latest?cb=20141022175016&path-prefix=es",2),
(3,"Bulbasaur","Latigo Cepa"," https://vignette.wikia.nocookie.net/pokemon-planet/images/5/5b/Bulbasaur_by_elfaceitoso.png/revision/latest?cb=20161115042430",1);

Insert Into Poke_Tipo(Id_Tipo, Id_Pokemon)
Values(1,1),(2,2),(3,3);
