<?php

include("conexion.php");

$sql = "DELETE FROM usuarios WHERE id='1'";

$res = $conexion->query($sql);

if($res){
    echo "eliminación exitosa";
}else{
    echo "fallo la eliminacion";
}
?>