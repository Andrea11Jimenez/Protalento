<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiendaonline";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
        die("Error al conectar con la base de datos: " . mysqli_connect_error() );
}else{}

?>