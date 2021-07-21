<?php

include 'conexion.php';

$id=$_POST['id_curso'];

$sql="DELETE from cursos where id_curso='$id'";

echo $result=mysqli_query($conexion, $sql);
?>