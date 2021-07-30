<?php

require_once "../conexion.php";
$conexion=conexion();

$nom= $_POST['nombre'];
$cost= $_POST['costo'];
$requi= $_POST['requisitos'];
$horaini= $_POST['hora_inicio'];
$horafin= $_POST['hora_fin'];
$dia= $_POST['dia'];
$grupo= $_POST['grupo'];
$sala= $_POST['sala'];
$fechaini= $_POST['fecha_inicio'];
$cupo= $_POST['cupo'];
$profesor= $_POST['matricula_profesor'];


$sql="INSERT into cursos (nombre,costo,requisitos,hora_inicio,hora_fin,dia,grupo,sala,fecha_inicio,cupo,matricula_profesor)
    values('$nom','$cost','$requi','$horaini','$horafin','$dia','$grupo','$sala','$fechaini','$cupo','$profesor')";
    echo $result=mysqli_query($conexion, $sql);
?>