<?php 
include("abc.php");
$id = $_GET['id'];
delete('tbl_usuarios','id',$id);
header("location:Capturar_Usuarios.php");
?>