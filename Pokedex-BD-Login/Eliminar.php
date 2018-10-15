<?php
        $conn = mysqli_connect("127.0.0.1","root","","Pokemons_Morales_Nicolas");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Nuevo</title>
</head>
<body>
<main>
        <section>
           <article class="cajita3">
           <form name="form" method="post">

                    <div class="box11">
                    <div class="box22">Codigo del Pokemon:</div>
                   <div class="box33"> <input class="inputform" type="text" id="id" name="id" value=""></div>
                    </div>

                    <input class="bot2" src="adminindex.php" name="cerrar" type="submit" value="Cancelar">
                    <input class="bot2" type="submit" name="enviar" value="Eliminar">
                </form>
           </article>
        </section>
    </main>
    <?php
        if(isset($_POST["enviar"])){
            
            if($_POST["id"]== null )
            {   
                echo "<p class='incorrecto'>Datos Incorrectos</p>";
            }

            else{

             

            $id=$_POST['id'];
            

            $sql1 = "select P.id Id
                    from Pokemon P 
                    where p.id='$id'";
           
            $result=mysqli_query($conn,$sql1);
            $asd=mysqli_fetch_assoc($result);

            $ppp=$asd['Id'];
               
                if(($ppp==$id)){
                

                $sql22=" Delete from Poke_Tipo
                where Id_Pokemon='$id'";      
                 $result=mysqli_query($conn,$sql22);

                $sql2=" Delete 
                        from Pokemon 
                        where Id='$id'";       
                $result=mysqli_query($conn,$sql2);

                echo "<p class='incorrecto'>Borrado Correctamente</p>";
                }

                else{
                     echo "<p class='incorrecto'>Datos Incorrectos</p>";
                }
        
         }     
        if(isset($_POST["cerrar"])){
            header('location:loginok.php');
        }}

        if(isset($_POST["cerrar"])){
            header('location:loginok.php');}
    ?>
</body>
</html>