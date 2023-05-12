<?php
    include("conexion.php");

    $sql = "INSERT INTO usuarios(nombre, apellido, edad) VALUES ('erick', 'Gomez', '21')";

    $res = $conexion-> query($sql);

    if($res){
        echo "Dato agregado exitosamente";
    }else{
        echo "fallo de insercion";
    }

?>