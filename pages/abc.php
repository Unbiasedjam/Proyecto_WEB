<?php

    function db_query($query){
        $conexion = mysqli_connect('localhost', 'root','','proyecto');
        $result = mysqli_query($conexion, $query);

        return $result;
    }

//insertar
    function insert($tbl_name, $form_data){
        $campo = array_keys($form_data);
        $sql = "INSERT INTO ".$tbl_name."(".implode(',',$campo).") VALUES('".implode("','",$form_data)."')";
        return db_query($sql);
    }

    //Borrar
    function delete($tbl_name, $field_id, $id){
        $sql = "delete from ".$tbl_name." where ".$field_id."=".$id."";
        return db_query($sql);
    }


    function edit($tbl_name,$form_data ,$field_id,$id){
        $sql = "UPDATE ".$tbl_name." SET ";
        $data = array();

        foreach($form_data as $column=>$value){
            $data[] = $column."="."'".$value."'";
        }
        $sql .= implode(',',$data);
        $sql .=" where ".$field_id." = ".$id."";
     
        return db_query($sql);
    }

    function select($tbl_name, $field_name, $field_id){
        $sql = "SELECT * FROM ".$tbl_name." where ".$field_name." = ".$field_id."";
        $db = db_query($sql);
        $GLOBALS['row'] = mysqli_fetch_object($db);

        return $db;
    }

    
?>
