<?php
// Obtener los datos enviados a través del formulario

$usuario = $_POST['gabriela'];
$contrasena = $_POST['12345'];

// Realizar la conexión a la base de datos del instituto
$servername = "localhost"; // Reemplaza con el nombre de tu servidor de base de datos
$username = "gabriela"; // Reemplaza con tu nombre de usuario de la base de datos
$password = "12345"; // Reemplaza con tu contraseña de la base de datos
$dbname = "id"; // Reemplaza con el nombre de tu base de datos

// Crea una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Realiza la lógica de validación de usuario y contraseña
if ($usuario === "usuario" && $contrasena === "contrasena") {
    // Prepara la sentencia SQL para insertar los datos en la tabla correspondiente (reemplaza "nombre_de_tabla" con el nombre adecuado)
    $sql = "INSERT INTO nombre_de_tabla (nombre, apellido, edad, email) VALUES ('$nombre', '$apellido', '$edad', '$email')";

    // Ejecuta la sentencia SQL y verifica si se realizó con éxito
    if ($conn->query($sql) === TRUE) {
        echo "Datos guardados correctamente en la base de datos";
    } else {
        echo "Error al guardar los datos en la base de datos: " . $conn->error;
    }
} else {
    echo "Usuario y/o contraseña incorrectos";
}

// Cierra la conexión a la base de datos
$conn->close();
?>