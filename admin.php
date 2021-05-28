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
$nombres2 = $_POST["usuarios"];
$pass2 = $_POST["contrasenas"];

$admin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE User_ID = '".$nombre."' AND password = '".$pass."'");
$nr = mysqli_num_rows($admin);

if($nr == 1)
{
    header("Location: pages/Capturar_Usuarios.html"); //cambiar a pagina para admin
}
else if ($nr == 0)
{
    header("Location: index.html");
}


$users = mysqli_query($conn, "SELECT * FROM tbl_users WHERE User_ID = '".$nombres2."' AND password = '".$pass2."'");
$rn = mysqli_num_rows($users);

if($rn == 1)
{
    header("Location: main.html"); //cambiar a pagina para admin
}
else if ($rn == 0)
{
    header("Location: index.html");
}

?>