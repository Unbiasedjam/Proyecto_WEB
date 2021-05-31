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



    if(isset($_POST['consulta'])){
        $tabla = $_POST["consulta"];
        switch($tabla){
            case 'valor1':

                break;
            case 'valor2':

                break;
            case 'valor3':

                break;
            case 'valor4':   

                break;    
            case 'valor5':

                break;
            default:
                break;
        }
    }
?>