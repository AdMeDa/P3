<?php
echo "hola estic aqui";

$dbhost = "127.0.0.1";
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
?>
