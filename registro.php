<?php
require_once "conexion.php";
$conexion=conexion();

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

$query = "INSERT INTO usuarios (nombre,telefono,email,contraseña) VALUES ('$nombre','$telefono','$email','$contraseña')";
//verificar que el correo no se repita en la BD
$verificar_email= mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");

if(mysqli_num_rows($verificar_email) > 0){
    echo '
    <script> 
      alert("Este correo ya esta registrado");
      window.location = "login.html";
    </script>
    ';
    mysqli_close($conexion);
}

$resultado = mysqli_query($conexion, $query);

if($resultado){
    echo '
    <script> 
      alert("Usuario registrado exitosamente!");
      window.location = "index.html";
    </script>
    ';
} else {
    echo '
    <script> 
      alert("Error, fallo su registro!");
      window.location = "login.html";
    </script>
    ';
}

mysqli_close($conexion);
?>