<?php
    include("conexion.php");

    $sql = "INSERT INTO usuarios (nombre, apellido, edad) VALUES ('miguel', 'Romero', '20')";

    $res = $conexion-> query($sql);

    if($res){
        echo "insercion exitosa";
    }else{
        echo "fallo la insercion";
    }

?>