
<?php
    // recuperar datos enviados por el metodo POST
    @$nombre = $_POST["nombre"];
    @$correo = $_POST["correo"];

    echo "Nombre de usuario: ". $nombre . "<br>";
    echo "Correo electrónico: ". $correo . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>
        <h2>Formulario</h2>

        <form action="formularios.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre..."/>
        <input type="email" name="correo" placeholder="Correo..."/>
        <input type="submit" value="Aceptar"/>
        </form> 
    
    <br>
    <a href="index.php">
        <button>index.php</button>
    </a>
</body>
</html>