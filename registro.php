
<?php
//consulta
include 'conexion.php';
$DNI = $_POST["DNI"];
$nombre = $_POST["nombre"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$carerra = $_POST["carrera"];

$insertar = "INSERT INTO ingresantes(DNI,nombre, direccion, correo, telefono, carera) VALUES ('$fecha_nacimiento','$DNI',$nombre',
 '$direccion','$correo', '$telefono', '$carerra')";



$verificar_correo = mysqli_query($conexion, "SELECT * FROM  ingresantes WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '<script>
        alert("El correo ya esta registrado");
        window.history.go(-1);
    </script>';
    exit;
}

$verificar_carrera = mysqli_query($conexion, "SELECT * FROM  ingresantes WHERE carerra = '$carerra'");
if(mysqli_num_rows($verificar_carerra) > 0){
    echo '<script>
        alert("El alumno ya esta registrado");
        window.history.go(-1);
    </script>';
    exit;
}


$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo 'Error al registrarse';
} else{
    echo '<script>
        alert("El alumno ha sido registrado exitosamente");
        window.history.go(-1);
    </script>';
}


// Cierra la conexión a la base de datos
$conn->close();
?>