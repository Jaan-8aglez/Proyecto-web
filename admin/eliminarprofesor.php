<?php
require_once "../conexion.php";
$conexion=conexion();

$fila= $conexion->query('select from profesores where matricula_profesor='.$_POST['matricula']);
$id = mysqli_fetch_row($fila);


$conexion->query("delete from profesores where matricula_profesor=".$_POST['matricula']);
echo 'Se elimino correctamente';
?>