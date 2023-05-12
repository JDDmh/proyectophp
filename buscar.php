<?php

include("conexion.php");

//$sql = "SELECT * FROM usuarios WHERE id='2' ";
//$sql = "SELECT * FROM usuarios WHERE edad='21' ";
//$sql = "SELECT * FROM usuarios WHERE edad='< 30' ";
//$sql = "SELECT * FROM usuarios WHERE apellido LIKE '%e%'";
$sql = "SELECT * FROM usuarios ORDER by id ASC";

$res = $conexion->query($sql);

while ($usuario = $res-> fetch_assoc()){
    echo "Usuario No: " . $usuario['id'] . "<br>";
    echo "Su nombre es : " . $usuario['nombre'] . "<br>";
    echo "Su apellido es : " . $usuario['apellido'] . "<br>";
    echo "Su edad es: " . $usuario['edad'] . "<br><br>";

}
?>