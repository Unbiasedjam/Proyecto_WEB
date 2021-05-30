<!DOCTYPE html>

<html>


<head>
    <title>Altas Bajas y Capturas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link type="text/css" href="bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href="../layout/styles/estilos.css" rel="stylesheet">

</head>

<body>
    <button type="button" onclick="javascript:location.href='../index.php'">Regreso</button> <tr></tr>
    <button type="button" onclick="javascript:location.href='../main.php'">Pagina Principal</button>
        <h2>Agregar Usuarios</h2>
    <div id="cosa">
        <form action="" method="post" width="100%">
            <input class="form-control" name="puesto" type="text" placeholder="Puesto">
            <input class="form-control" name="almacen" type="text" placeholder="Almacen">
            <input class="form-control" name="nombre" type="text" placeholder="Nombre(s)">
            <input class="form-control" name="apePat" type="text" placeholder="Apellido Paterno">
            <input class="form-control" name="apeMat" type="text" placeholder="Apellidos Materno">
            <input class="form-control" name="correo" type="text" placeholder="Correo">
            <input class="form-control" name="contra" type="text" placeholder="Contraseña">
            <input type="submit" name="submit" class="btn btn-primary" value="Insertar">
        
        </form>
    </div>
    <br>

    <?php
    include("abc.php");
    if(isset($_POST['submit'])){
        $field = array("puesto"=>$_POST['puesto'],"almacen"=>$_POST['almacen'],"nombre"=>$_POST['nombre'],"apePat"=>$_POST['apePat'],"apeMat"=>$_POST['apeMat'],
                        "correo"=>$_POST['correo'],"contra"=>$_POST['contra']);
        $tbl = "tbl_usuarios";
        insert($tbl,$field);
        
    }
?>  
    <h2>Tabla de Usuarios</h2>
    <table width="100%" id="cosa" action="abc.php" >
        <tr>

            <th>id</th>
            <th>Puesto</th>
            <th>Almacen</th>
            <th>Nombre(s)</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Eliminar</th>
            <th>Modificar</th>
        </tr>
        <?php
            $sql = "select * from tbl_usuarios";
            $result = db_query($sql);
            while($row = mysqli_fetch_object($result)){
        ?>
        <tr>
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->puesto;?></td>
            <td><?php echo $row->almacen;?></td>
            <td><?php echo $row->nombre;?></td>
            <td><?php echo $row->apePat;?></td>
            <td><?php echo $row->apeMat?></td>
            <td><?php echo $row->correo;?></td>
            <td>
            <a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>">Editar</a>
            </td>
            <td>
                <a class="btn btn-primary" href="borrar.php?id=<?php echo $row->id; ?>">Borrar</a>
            </td>
            </tr>
           <?php  } ?>
    </table>
</body>

</html>