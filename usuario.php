<?php
// Obtener los datos enviados a través del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$Dni = $_POST['Dni'];
$Fecha_nacimiento = $_POST['Fecha'];
$carerra = $_POST['carerra'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Realizar la conexión a la base de datos del instituto
$servername = "localhost"; // Reemplaza con el nombre de tu servidor de base de datos
$username = "id20884484_administrador"; // Reemplaza con tu nombre de usuario de la base de datos
$password = "Isft-185"; // Reemplaza con tu contraseña de la base de datos
$dbname = "id20884484_alumnos"; // Reemplaza con el nombre de tu base de datos

// Crea una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Realiza la lógica de validación de usuario y contraseña
if ($usuario === "usuario" && $contrasena === "contrasena") {
    // Prepara la sentencia SQL para insertar los datos en la tabla correspondiente (reemplaza "nombre_de_tabla" con el nombre adecuado)
    $sql = "INSERT INTO ingresantes (nombre, apellido, dni,fecha, email) VALUES ('$nombre', '$apellido', '$Dni','$Fecha_nacimiento','$carerra', '$email')";

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