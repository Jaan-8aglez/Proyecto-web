<?php

require_once "../conexion.php";
$conexion=conexion();


$id= $_POST['id'];
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

$sql="UPDATE cursos set nombre='$nom',
                        costo='$cost',
                        requisitos='$requi',
                        hora_inicio='$horaini',
                        hora_fin='$horafin',
                        dia='$dia',
                        grupo='$grupo',
                        sala='$sala',
                        fecha_inicio='$fechaini',
                        cupo='$cupo',
                        matricula_profesor='$profesor'


                        where id_curso='$id'";

                        echo $result=mysqli_query($conexion, $sql);
?>