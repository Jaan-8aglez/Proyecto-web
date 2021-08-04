<?php
require_once "../conexion.php";

$fila= $conexion->query('select from cursos where id_curso='.$_POST['id']);
$id = mysqli_fetch_row($fila);


$conexion->query("delete from cursos where id_curso=".$_POST['id']);
echo 'Se elimino correctamente';
?>