<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Gym</title>
        <link rel="stylesheet" href="link/font-awesom.min.css">
        <link rel="stylesheet" href="css/estils.css">
        <script src="link/jquery-latest.js"></script>
        <script src="main.js"></script>
    </head>

    <body>

        <div id="prova">

            <header>
                <a href="index.html">   
                    <h1>VELMEL GYM</h1>
                </a>
            </header>

            <div class="menu_bar">
                <a href="#" class="bt-menu"><span class="icon-list2"></span>VELMEL GYM</a>
            </div>

            <nav id="nav_mobil">
                <ul>
                    <li><a href="index.html">Inici</a></li>
                    <li><a href="qui.html">Qui sóm?</a></li>
                    <li><a href="contacte.html">Contacte</a></li>
                    <li><a href="modificar.php">Modificar</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </nav>

            <script>
                $(document).ready(main);

                var contador = 1;

                function main () {
                    $('.menu_bar').click(function(){
                        if (contador == 1) {
                            $('#nav_mobil').animate({
                                left: '0'
                            });
                            contador = 0;
                        } else {
                            contador = 1;
                            $('#nav_mobil').animate({
                                left: '-100%'
                            });
                        }
                    });
                }
            </script>

            <nav id="nav_pc">
                <a href="index.html">Inici</a>
                <a href="qui.html">Qui sóm?</a>
                <a href="contacte.html">Contacte</a>
                <a href="modificar.php">Modificar</a>
                <a href="login.html">Login</a>
            </nav>

        </div>
<!--codi de iniciar sessió-->

<?php

echo "hola estic aqui";

$dbhost = "localhost";
$dbuser = "usuari";
$dbpass = "1234";
$dbname = "velmel";

echo "hola estic aqui2";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
    echo "peta";
}
echo "hola estic aqui100000";
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

echo "el contingut de la variable".$nombre." i el pasword es ".$pass;

//query per seleccionar els camps dni i contrasenya        
$query = mysqli_query($conn,"SELECT * FROM Soci WHERE DNI = '".$nombre."' and Contrassenya = '".$pass."'");
$nr = mysqli_num_rows($query);
//Si s'entra el usuari correcte sortira el seguent missatge
if($nr == 1)
{
	//header("Location: pagina.html")
	echo "Benvingut soci:     " .$nombre;
   
}
        //si no s'entra correctament redirigeix a la pàgina del login
else if ($nr == 0) 
{
	header("Location: login.html");
	//echo "No ingreso"; 
}
	
?>
</body>
</html>