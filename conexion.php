<?php
//var_dump( $_POST)
//CONEXION A LA BASE DE DATOS
$conexion = mysqli_connect("localhost", "root", "", "proyectofinalcac2023");
if(mysqli_connect_errno()){
    echo "error de conexion";
}
else{
     echo "conectado correctamente";
}



$Dni = $_POST["Dni"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["Telefono"];
$Carrera = $_POST["Carrera"];
$correo = $_POST["correo"];

$consultas = mysqli_query($conexion, "SELECT * FROM ingresantes");


$insertar = "INSERT INTO ingresantes(Dni, nombre, apellidos, telefono, carrera, correo,  telefono) VALUES ('$Dni','$nombre',
 '$apellidos','$telefono','$Carrera','$correo')";



//echo "<pre>";
//var_dump($consultas);
//echo "</pre>";


$listadoArray = mysqli_fetch_array($consultas);
//echo "<pre>";
//var_dump($listadoArray);
//echo "</pre>";



$insertarDato = "INSERT INTO ingresantes(Dni,nombre, apellido, correo, carrera, telefono) VALUES ('$nombreingresado', '$apellidoingresado', '$correoingresado', '$cantidadingresada', '$categoriaingresada')";
//echo $insertarDato;

$insertPhp = mysqli_query($conexion, $insertarDato);


//header('refresh: 7, url=index.html');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>INGRESANTES</title>
</head>
<body>
    <h1>Listado </h1>
<table  class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Dni</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">carrera</th>
      <th scope="col">telefono</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row"></th>
      <td> <?php
        echo $Dni;
        ?></td>
      <td>
        <?php
        echo $nombre;
        ?>
      </td>
      <td> <?php
        echo $apellido;
        ?></td>
       <td> <?php
        echo $correo;
        ?></td>
        <td><?php
        echo $carrera;
        ?></td>
        <td><?php
        echo $telefono;
        ?></td>
    </tr>
    <?php
    while($listadoArray1 = mysqli_fetch_assoc($consultas)){
       
        ?> 
        <tr>
        <th scope="row"></th>
        <td>
        <?php
          echo $listadoArray1['Dni'];
          ?>
        </td>
        <td>
        <?php
          echo $listadoArray1['nombre'];
          ?>
        </td>
        <td>
        <?php
          echo $listadoArray1['apellido'];
          ?>
        </td>
        <td>
        <?php
          echo $listadoArray1['email'];
          ?>
        </td>
        <td>
        <?php
          echo $listadoArray1['carrrera'];
          ?>
        </td>
        <td>
        <?php
          echo $listadoArray1['telefono'];
          ?>
        </td>
      </tr>
      <?php
     };
    

     ?>
    
   
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
</body>
</html>

