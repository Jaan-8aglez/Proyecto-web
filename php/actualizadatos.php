<?php

include 'conexion.php';

$id= $_POST['id_curso'];
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

$sql="UPDATE cursos set nombre='$nombre',
                        costo='$costo',
                        requisitos='$requisitos',
                        hora_inicio='$hora_ini',
                        hora_fin='$hora_fin',
                        dia='$dia',
                        grupo='$grupo',
                        sala='$sala',
                        fecha_inicio='$fecha_ini',
                        cupo='$cupo',
                        matricula_profesor='$profesor'


                        where id_curso='$id'";

                        echo $result=mysqli_query($conexion, $sql);
?>