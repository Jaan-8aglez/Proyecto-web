<?php

include 'conexion.php';

$nombre= $_POST ['nombre'];
$costo= $_POST ['costo'];
$requisitos= $_POST ['requisitos'];
$hora_ini= $_POST ['hora_inicio'];
$hora_fin= $_POST ['hora_fin'];
$dia= $_POST ['dia'];
$grupo= $_POST ['grupo'];
$sala= $_POST ['sala'];
$fecha_ini= $_POST ['fecha_inicio'];
$cupo= $_POST ['cupo'];
$profesor= $_POST ['matricula_profesor'];


$sql="INSERT into cursos (nombre,costo,requisitos,hora_inicio,hora_fin,dia,grupo,sala,fecha_inicio,cupo,matricula_profesor)
    values('$nombre','$costo','$requisitos','$hora_ini','$hora_fin','$dia','$grupo','$sala','$fecha_ini','$cupo','$profesor')";
    echo $result=mysqli_query($conexion, $sql);
?>