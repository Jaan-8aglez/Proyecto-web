<?php 
function conexion(){

    $servidor= "localhost";
    $usuario= "root";
    $password= "";
    $bd= "cursos";
    $conexion= mysqli_connect($servidor,$usuario,$password,$bd);
    return $conexion;
    
    if ($conexion->connect_error) {
        die("Error al conectarse con la BD: " . $db->connect_error);
    }

}

?>