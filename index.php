<?php
    $servidor  = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ejemplo";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
    if(!$enlace){
        die("Error de conexión: " . mysqli_connect_error());
    }

    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        
        $query = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
        
        if(mysqli_query($enlace, $query)){
            echo "Datos insertados correctamente.";
        } else {
            echo "Error: " . mysqli_error($enlace);
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required><br><br>
        
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>
