<?php
require_once "../conexion.php";
$conexion=conexion();


$conexion->query("delete from inscripcion where id_inscripcion=".$_POST['id']);
echo 'Se elimino correctamente';
?>