<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN CURSOS</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

    <script src="librerias/jquery-3.6.0.min.js" ></script>
    <script src="../js/funciones.js" ></script>
    <script src="librerias/bootstrap-4.5.0-dist/js/bootstrap.js" ></script>
    <script src="librerias/alertifyjs/alertify.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

   <div class="container">
       <div id="tabla"></div>
   </div>

<!-- Nuevos datos Modal -->
<div class="modal fade" id="modalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Curso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         
         <label>Nombre:</label>
         <input type="text" name="" id="nombre" class="form-control input-sm">
         <label>Costo:</label>
         <input type="text" name="" id="costo" class="form-control input-sm">
         <label>Requisitos:</label>
         <input type="text" name="" id="requisitos" class="form-control input-sm">
         <label>Hora inicio:</label>
         <input type="text" name="" id="hora_inicio" class="form-control input-sm">
         <label>Hora fin:</label>
         <input type="text" name="" id="hora_fin" class="form-control input-sm">
         <label>Dias:</label>
         <input type="text" name="" id="dia" class="form-control input-sm">
         <label>Grupo:</label>
         <input type="text" name="" id="grupo" class="form-control input-sm">
         <label>Sala:</label>
         <input type="text" name="" id="sala" class="form-control input-sm">
         <label>Fecha inicio:</label>
         <input type="text" name="" id="fecha_inicio" class="form-control input-sm">
         <label>Cupo:</label>
         <input type="text" name="" id="cupo" class="form-control input-sm">
         <label>Profesor:</label>
         <input type="text" name="" id="matricula_profesor" class="form-control input-sm">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo" >Agregar curso</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Editar datos Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Curso</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <input type="text" hidden="" id="id_curso" class="form-control input-sm">
         <label>Nombre:</label>
         <input type="text" name="" id="nombre1" class="form-control input-sm">
         <label>Costo:</label>
         <input type="text" name="" id="costo1" class="form-control input-sm">
         <label>Requisitos:</label>
         <input type="text" name="" id="requisitos1" class="form-control input-sm">
         <label>Hora inicio:</label>
         <input type="text" name="" id="hora_inicio1" class="form-control input-sm">
         <label>Hora fin:</label>
         <input type="text" name="" id="hora_fin1" class="form-control input-sm">
         <label>Dias:</label>
         <input type="text" name="" id="dia1" class="form-control input-sm">
         <label>Grupo:</label>
         <input type="text" name="" id="grupo1" class="form-control input-sm">
         <label>Sala:</label>
         <input type="text" name="" id="sala1" class="form-control input-sm">
         <label>Fecha inicio:</label>
         <input type="text" name="" id="fecha_inicio1" class="form-control input-sm">
         <label>Cupo:</label>
         <input type="text" name="" id="cupo1" class="form-control input-sm">
         <label>Profesor:</label>
         <input type="text" name="" id="matricula_profesor1" class="form-control input-sm">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos" >Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
    
</body>
</html>

<script type="text/javascript" >
$(document).ready(function(){

    $('#tabla').load('tabla.php')

});
</script>

<script type="text/javascript" >
$(document).ready(function(){

    $('#guardarnuevo').click(function(){
      nombre=$('#nombre').val();
      costo=$('#costo').val();
      requisitos=$('#requisitos').val();
      hora_inicio=$('#hora_inicio').val();
      hora_fin=$('#hora_fin').val();
      dia=$('#dia').val();
      grupo=$('#grupo').val();
      sala=$('#sala').val();
      fecha_inicio=$('#fecha_inicio').val();
      cupo=$('#cupo').val();
      matricula_profesor=$('#matricula_profesor').val();
      agregardatos(nombre,costo,requisitos,hora_inicio,hora_fin,dia,grupo,sala,fecha_inicio,cupo,matricula_profesor);

    });

    $('#actualizadatos').click(function(){

      actualizadatos();

    });

});

</script>