<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyecto";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
 die("No hay conexion: ".mysqli_connect_error());   
}

$nombre = $_POST["txtUser"];
$pass = $_POST["txtPass"];

$admin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE User_ID = '".$nombre."' AND password = '".$pass."'");
$nr = mysqli_num_rows($admin);



if($nr == 1)
{
    echo "Bienvenido: " .$nombre; //cambiar a pagina para admin
}
else if ($nr == 0)
{
    header("Location: login.html");
}



?>