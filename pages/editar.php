<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar</title>
    <link type="text/css" href="bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href="../layout/styles/estilos.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 4px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        th {
            background-color: #4CAF50;
            color: white;
        }
        .main-wrapper{
            width:50%;
            
            background:#E0E4E5;
            border:1px solid #292929;
            padding:25px;
        }
        hr {
            margin-top: 5px;
            margin-bottom: 5px;
            border: 0;
            border-top: 1px solid #eee;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <h2>Editar Informacion de Usuarios. </h2>
        <br>
        <?php 
        include("abc.php");
        $id = $_GET['id'];
        select('tbl_usuarios','id',$id);
        ?>
        <button type="button" onclick="javascript:location.href='Capturar_Usuarios.php'">Regreso</button>
        <br><br>
        <form action="" method="post">
            Puesto=<input type="text" value="<?php echo $row->puesto;?>" name="puesto"><br>
            Almacen=<input type="text" value="<?php echo $row->almacen;?>" name="almacen"><br>
            Nombres(s)=<input type="text" value="<?php echo $row->nombre;?>" name="nombre"><br>
            Apellido Paterno=<input type="text" value="<?php echo $row->apePat;?>" name="apePat"><br>
            Apellido Materno=<input type="text" value="<?php echo $row->apeMat;?>" name="apeMat"><br>
            Correo=<input type="text" value="<?php echo $row->correo;?>" name="correo"><br>
            Contraseña=<input type="text" value="<?php echo $row->contra;?>" name="contra"><br><br>
            <input type="submit" name="submit">
        </form>

        <?php
            if(isset($_POST['submit'])){
                $field = array("puesto"=>$_POST['puesto'], "almacen"=>$_POST['almacen'],"nombre"=>$_POST['nombre'],
                                "apePat"=>$_POST['apePat'],"apeMat"=>$_POST['apeMat'],"correo"=>$_POST['correo'],"contra"=>$_POST['contra'],);
                $tbl = "tbl_usuarios";
                edit($tbl,$field,'id',$id);
                header("location:Capturar_Usuarios.php");
            }
        ?>
    </div>
</body>
</html>