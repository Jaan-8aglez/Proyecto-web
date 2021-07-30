function agregardatos(nombre,costo,requisitos,hora_inicio,hora_fin,dia,grupo,sala,fecha_inicio,cupo,matricula_profesor) {
  cadena = "nombre=" + nombre + "&costo=" + costo + "&requisitos=" + requisitos + "&hora_inicio=" + hora_inicio + "&hora_fin=" +
    hora_fin + "&dia=" + dia + "&grupo=" + grupo + "&sala=" + sala + "&fecha_inicio=" + fecha_inicio + "&cupo=" +cupo + "&matricula_profesor=" + matricula_profesor;

  $.ajax({
    type: "POST",
    url: "agregardatos.php",
    data: cadena,
    success: function (r) {
      if (r == 1) {
        $("#tabla").load("admin/tabla.php");
        alertify.success("Curso agregado exitosamente!");
      } else {
        alertify.error("Error agregar, Fallo el servidor");
      }
    }
  });
}

function agregaform(datos) {
  d=datos.split("||");

  $('#id_curso').val(d[0]);
  $('#nombre1').val(d[1]);
  $('#costo1').val(d[2]);
  $('#requisitos1').val(d[3]);
  $('#hora_inicio1').val(d[4]);
  $('#hora_fin1').val(d[5]);
  $('#dia1').val(d[6]);
  $('#grupo1').val(d[7]);
  $('#sala1').val(d[8]);
  $('#fecha_inicio1').val(d[9]);
  $('#cupo1').val(d[10]);
  $('#matricula_profesor1').val(d[11]);
}

function actualizadatos() {
  id_curso = $('#id_curso').val();
  nombre= $('#nombre1').val();
  costo= $('#costo1').val();
  requisitos= $('#requisitos1').val();
  hora_inicio= $('#hora_inicio1').val();
  hora_fin= $('#hora_fin1').val();
  dia= $('#dia1').val();
  grupo= $('#grupo1').val();
  sala= $('#sala1').val();
  fecha_inicio= $('#fecha_inicio1').val();
  cupo= $('#cupo1').val();
  matricula_profesor= $('#matricula_profesor1').val();

  cadena = "id_curso=" + id_curso + "&nombre=" + nombre + "&costo=" + costo + "&requisitos=" + requisitos + "&hora_inicio=" + hora_inicio + "&hora_fin=" +
    hora_fin + "&dia=" + dia + "&grupo=" + grupo + "&sala=" + sala + "&fecha_inicio=" + fecha_inicio + "&cupo=" +cupo + "&matricula_profesor=" + matricula_profesor;

  $.ajax({
    type: "POST",
    url: "actualizadatos.php",
    data: cadena,
    success: function (r) {
      if (r == 1) {
        $("#tabla").load("admin/tabla.php");
        alertify.success("Se actualizo el curso con exito!");
      } else {
        alertify.error("Error actualizar, Fallo el servidor");
      }
    }
  });
}

function preguntarSiNo(id_curso) {
  alertify.confirm('Eliminar datos', '¿Desea eliminar el registro del curso?', function () {
    eliminardatos(id_curso)
  }, function () {
    alertify.error('Cancelado')
  });
}

function eliminardatos(id_curso) {

  cadena = "id_curso" + id_curso;
  $.ajax({
    type: "POST",
    url: "eliminardatos.php",
    data: cadena,
    success: function (r) {
      if (r == 1) {
        $("#tabla").load("admin/tabla.php");
        alertify.success("Se elimino el registro con exito!");
      } else {
        alertify.error("Error eliminar, Fallo el servidor");
      }
    }
  });

}