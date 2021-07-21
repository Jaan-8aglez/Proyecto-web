<?php

include 'conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Centro de Tecnologías en Cómputo y Comunicación</title>
	  <link rel="shortcut icon" href="images/unam-icon.png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />


</head>
<body>
   
	<!-- section -->
	<div class="section layout_padding padding_bottom-0">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="full">
                      <div class="heading_main text_align_center">
						              <h2><span>Registro de cursos</span></h2>
                      </div>
					        </div>
              </div>
			    </div>
      </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
        <table class="table table-hover table-condensed table-bordered" > 
        <caption> 
          <div class="full center">
          <button class="btn btn-secondary mt-5 mb-5" data-toggle="modal" data-target="#modalNuevo">Agregar nuevo curso</button> 
          </div>
        </caption>

        <tr>
        <td>Nombre</td>
        <td>Costo</td>
        <td>Requisitos</td>
        <td>Hora inicio</td>
        <td>Hora fin</td>
        <td>Días</td>
        <td>Grupo</td>
        <td>Sala</td>
        <td>Fecha inicio</td>
        <td>Cupo</td>
        <td>Profesor</td>
        <td>Editar</td>
        <td>Eliminar</td>
        </tr>

      <?php
        $sql="SELECT id_curso,nombre,costo,requisitos,hora_inicio,hora_fin,dia,grupo,sala,fecha_inicio,cupo,matricula_profesor from cursos";
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){

             $datos=$ver[0]."||".
                    $ver[1]."||".
                    $ver[2]."||".
                    $ver[3]."||".
                    $ver[4]."||".
                    $ver[5]."||".
                    $ver[6]."||".
                    $ver[7]."||".
                    $ver[8]."||".
                    $ver[9]."||".
                    $ver[10]."||".
                    $ver[11];
      ?>    
        
        <tr>
        <td> <?php echo $ver[1]?></td>
        <td> <?php echo $ver[2]?></td>
        <td> <?php echo $ver[3]?></td>
        <td> <?php echo $ver[4]?></td>
        <td> <?php echo $ver[5]?></td>
        <td> <?php echo $ver[6]?></td>
        <td> <?php echo $ver[7]?></td>
        <td> <?php echo $ver[8]?></td>
        <td> <?php echo $ver[9]?></td>
        <td> <?php echo $ver[10]?></td>
        <td> <?php echo $ver[11]?></td>
        
        <td> 
           <button class="btn btn-success" data-toggle="modal" data-target="#modalEditar" onclick="agregaform('<?php echo $datos ?>')"><span class="fa fa-print" aria-hidden="true"></span></button>
        </td>
        <td> 
           <button class="btn btn-danger" onclick="preguntarSiNo('<?php echo $ver[0] ?>')"><span class="fa fa-trash" aria-hidden="true"></span></button>
        </td>
        
        </tr>
      <?php  
        }
         ?>
        </table>
    </div> 
</div>   
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <p class="crp">© Copyrights Facultad de Estudios Superiores Cuautitlán 2021.</p>
            </div>
        </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
