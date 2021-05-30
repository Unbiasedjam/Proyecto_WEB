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

$admin = mysqli_query($conn, "SELECT * FROM tbl_usuarios WHERE correo = '".$nombre."' AND contra = '".$pass."'");
$fila = mysqli_fetch_assoc($admin);
$nr = mysqli_num_rows($admin);

if($nr == 1)
{
    $_SESSION['puesto'] = $fila['puesto'];
    if ($_SESSION['puesto'] == 1){
    header("Location: pages/Capturar_Usuarios.php"); //cambiar a pagina para admin
    }
    else if ($_SESSION['puesto']==2){
        header("Location: main.php"); //cambiar a pagina para admin
    }
}
else if ($nr == 0)
{
    header("Location: index.php");
}
?>