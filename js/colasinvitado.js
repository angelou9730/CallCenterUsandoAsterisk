var table;
function listar_registro_colas() {
  table = $("#tabla_registro_colas").DataTable({
    ordering: false,
    paging: true,
    searching: { regex: true },
    lengthMenu: [
      [10, 25, 50, 100, -1],
      [10, 25, 50, 100, "All"],
    ],
    pageLength: 25,
    destroy: true,
    async: false,
    processing: true,
    ajax: {
      url: "../controlador/colas/controlador_colas_listar.php",
      type: "POST",
    },
    columns: [

      { data: "created" },
      { data: "agent" },
      {
        data: "event",
        render: function (data, type, row) {
          if (data == 'CONNECT') {
            return (
              "<span class='label label-success'><i class='fa fa-phone'> </i>  " +
              data +
              "</span>"
            );
          } else if (data == 'ENTERQUEUE') {
            return "<span class='label label-warning'><i class='fa fa-volume-up'></i>&nbsp;RINGING</span>";
          }
        },
      },
      {
        data: "NombreCliente",
        render: function (data, type, row) {
          if (row.event == 'ENTERQUEUE') {
            if (data === null) {
              return row.data2;
            } else {
              return data;
            }
          } else {
            return "<span class='label label-secondary'style='background-color: #343a40; color: white;'><i class='fa fa-lock'></i>&nbsp;&nbsp;LLAMADA ENCRYPTADA</span>";
          }
        }
      },
      {
        data: "NombreCliente",
        render: function (data, type, row) {
          var isNumeric = !isNaN(data);
          var buttonContent;

          if (row.event == 'ENTERQUEUE') {
            if (isNumeric && row.event == 'ENTERQUEUE') {
              buttonContent = "<button style='font-size:13px;' type='button' class='agregar btn btn-success' title='Registrar Cliente' ><i class='fa fa-user-plus'></i>&nbsp;<strong>Registrar</strong>";
            } else {
              buttonContent = "<button style='font-size:13px;' type='button' class='agregar btn btn-danger' title='Cliente Registrado' disabled><i class='fa fa-user-plus'></i>&nbsp;<strong>Registrado</strong>";
            }
          } else {
            return "";
          }
          return buttonContent;
        },
      },
      {
        data: "idtarea",
        render: function (data, type, row) {
          if (row.event === 'ENTERQUEUE') {
            if (data === null && row.idemisor !== null) {
              // Si data es null y el evento es ENTERQUEUE
              return "<button style='font-size:13px;' type='button' class='agregarsolicitud btn btn-primary' title='Registrar Solicitud'><i class='fa fa-tasks'></i>&nbsp;<strong>Registrar</strong></button>";
            } else
              return "<button style='font-size:13px;' type='button' class='agregarsolicitud btn btn-danger' title='Registrar Cliente' disabled><i class='fa fa-ban'></i>&nbsp;<strong>Bloqueado</strong></button>";
          } else {
            return "";
          }

        },
      },

    ],
    columnDefs: [
      {
        searchable: false,
        orderable: false,
        targets: 0, // Indica que se aplica a la primera columna (campo de numeración)
      },
    ],
    language: idioma_espanol,
    select: true,
  });

  document.getElementById("tabla_registro_colas_filter").style.display = "none";
  $("input.global_filter").on("keyup click", function () {
    filterGlobal();
  });
  $("input.column_filter").on("keyup click", function () {
    filterColumn($(this).parents("tr").attr("data-column"));
  });




}

function filterGlobal() {
  // Aplicar búsqueda global a la tabla de colas
  $("#tabla_registro_colas").DataTable().search($("#global_filter").val()).draw();

}

$("#tabla_registro_colas").on("click", ".agregar", function () {
  // Obtener los datos de la fila
  var data = table.row($(this).parents("tr")).data();

  // Verificar si se está mostrando el detalle de la fila y obtener datos adicionales si es necesario
  if (table.row(this).child.isShown()) {
    data = table.row(this).data();
  }

  // Abrir el modal correspondiente
  $("#modal_registrar_emisor").modal({ backdrop: "static", keyboard: false });
  $("#modal_registrar_emisor").modal("show");

  // Introducir el valor en el input del modal
  $("#txt_numecliente").val(data.data2);
});

$("#tabla_registro_colas").on("click", ".agregarsolicitud", function () {
  // Obtener los datos de la fila
  var data = table.row($(this).parents("tr")).data();

  // Verificar si se está mostrando el detalle de la fila y obtener datos adicionales si es necesario
  if (table.row(this).child.isShown()) {
    data = table.row(this).data();
  }

  // Abrir el modal correspondiente
  $("#modal_registrar_solicitud").modal({ backdrop: "static", keyboard: false });
  $("#modal_registrar_solicitud").modal("show");
  $("#idcols").val(data.id);
  $("#idemisor").val(data.idemisor);

});
$("#tabla_registro_colas").on("click", ".calificar", function () {
  // Obtener los datos de la fila
  var data = table.row($(this).parents("tr")).data();

  // Verificar si se está mostrando el detalle de la fila y obtener datos adicionales si es necesario
  if (table.row(this).child.isShown()) {
    data = table.row(this).data();
  }

  // Abrir el modal correspondiente
  $("#modal_registrar_calificacion").modal({ backdrop: "static", keyboard: false });
  $("#modal_registrar_calificacion").modal("show");
  $("#idCola").val(data.id);


});

function listar_combo_encargado() {
  $.ajax({
    "url": "../controlador/colas/controlador_combo_encargado_listar.php",
    type: 'POST'

  }).done(function (resp) {

    var data = JSON.parse(resp);
    var cadena = "";
    if (data.length > 0) {
      for (var i = 0; i < data.length; i++) {
        cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + " " + data[i][2] + "</option>";
      }
      $("#cbm_encargado").html(cadena);
      $("#cbm_encargado2").html(cadena);


    } else {
      cadena += "<option value=''>NO SE ENCONTRARON REGISTROS</option>";
      $("#cbm_encargado").html(cadena);
      $("#cbm_encargado2").html(cadena);
    }
  })
}

function Registrar_emisor() {

  var titulo = $("#cbm_titulo").val();
  var nomcliente = $("#txt_nomcliente").val();
  var apecliente = $("#txt_apecliente").val();
  var docidentidad = $("#cbm_docidentidad").val();
  var numerodoc = $("#txt_numerodoc").val();
  var sexo = $("#cbm_sexo").val();
  var direccion = $("#txt_direccion").val();
  var numecliente = $('#txt_numecliente').val();
  var encargado = $('#cbm_encargado').val();

  if (titulo.length == 0 || nomcliente.length == 0 || apecliente.length == 0 || direccion.length == 0 || docidentidad.length == 0 || numerodoc.length == 0 || sexo.length == 0 || numecliente.length == 0 ||
    encargado.length == 0) {
    return Swal.fire("Mensaje De Advertencia", "Llene los campos vacios", "warning");
  }



  $.ajax({
    "url": "../controlador/emisor/controlador_emisor_registrar.php",
    type: 'POST',
    data: {
      titulo: titulo,
      nombreCliente: nomcliente,
      apellidoCliente: apecliente,
      tipodocumento: docidentidad,
      numerodocumento: numerodoc,
      sexo: sexo,
      direccion: direccion,
      numeroCliente: numecliente,
      encargado: encargado
    }
  }).done(function (resp) {
    if (resp > 0) {
      if (resp == 1) {
        $("#modal_registrar_emisor").modal('hide');
        Swal.fire("Mensaje De Confirmacion", "Datos correctamente ingresados, Nuevo Emisor Registrado", "success")
          .then((value) => {
            LimpiarRegistroEmisor();
            table.ajax.reload();
          });
      } else {
        return Swal.fire("Mensaje De Advertencia", "Lo sentimos, el numero del cliente ya existe", "warning");
      }
    } else {
      Swal.fire("Mensaje De Error", "Lo sentimos, no se pudo completar el registro", "error");
    }
  })
}
function LimpiarRegistroEmisor() {
  $("#txt_nomcliente").val("");
  $("#txt_apecliente").val("");
  $("#txt_numerodoc").val("");
  $("#txt_direccion").val("");

}

function Registrar_solicitud() {

  var descripcion = $("#txt_descripcion").val();
  var sede = $("#cbm_sede").val();
  var idemisor = $("#idemisor").val();
  var empresa = $("#txt_empresa").val();
  var encargado = $("#cbm_encargado2").val();
  var estado = $("#cbm_estado").val();
  var idcolas = $("#idcols").val();



  if (descripcion.length == 0 || empresa.length == 0 || encargado.length == 0 || sede.length == 0 || estado.length == 0
    || idcolas.length == 0 || idemisor.length == 0) {
    return Swal.fire("Mensaje De Advertencia", "Llene los campos vacios", "warning");
  }



  $.ajax({
    "url": "../controlador/solicitud/controlador_solicitud_registrar.php",
    type: 'POST',
    data: {
      descripcion: descripcion,
      estado: sede,
      idEmisor: idemisor,
      empresa: empresa,
      encargado: encargado,
      estadoTarea: estado,
      idCola: idcolas,

    }
  }).done(function (resp) {
    if (resp > 0) {
      if (resp == 1) {
        $("#modal_registrar_solicitud").modal('hide');
        Swal.fire("Mensaje De Confirmacion", "Datos correctamente ingresados, Nuevo Emisor Registrado", "success")
          .then((value) => {
            LimpiarRegistroSolicitud();
            table.ajax.reload();
          });
      } else {
        return Swal.fire("Mensaje De Advertencia", "Lo sentimos,no se pudo ingresar la solicitud", "warning");
      }
    } else {
      Swal.fire("Mensaje De Error", "Lo sentimos, no se pudo completar el registro", "error");
    }
  })
}

function LimpiarRegistroSolicitud() {
  $("#txt_descripcion").val("");
  $("#txt_empresa").val("");
}
function Registrar_calificacion() {
  var criterioA = $("#txt_crA").val();
  var criterioB = $("#txt_crB").val();
  var criterioC = $("#txt_crC").val();
  var criterioD = $("#txt_crD").val();
  var criterioE = $("#txt_crE").val();
  var observacion = $("#txt_obs").val();
  var idCola = $("#idCola").val();
  if (criterioA.length == 0 || criterioB.length == 0 || criterioC.length == 0 || criterioD.length == 0 || criterioE.length == 0
    || observacion.length == 0 || idCola.length == 0) {
    return Swal.fire("Mensaje De Advertencia", "Llene los campos vacios", "warning");
  }
  $.ajax({
    "url": "../controlador/calificacion/controlador_calificacion_registrar.php",
    type: 'POST',
    data: {
      idCola: idCola,
      criterioA: criterioA,
      criterioB: criterioB,
      criterioC: criterioC,
      criterioD: criterioD,
      criterioE: criterioE,
      observaciones: observacion

    }
  }).done(function (resp) {
    if (resp > 0) {
      if (resp == 1) {
        $("#modal_registrar_calificacion").modal('hide');
        Swal.fire("Mensaje De Confirmacion", "Llamada correctamente Calificada", "success")
          .then((value) => {
            LimpiarRegistroCalificacion();
            table.ajax.reload();
          });
      } else {
        return Swal.fire("Mensaje De Advertencia", "Lo sentimos,no se pudo ingresar la calificacion", "warning");
      }
    } else {
      Swal.fire("Mensaje De Error", "Lo sentimos, no se pudo completar el registro", "error");
    }
  })
}
function LimpiarRegistroCalificacion() {
  $("#txt_crA").val("");
  $("#txt_crB").val("");
  $("#txt_crC").val("");
  $("#txt_crD").val("");
  $("#txt_crE").val("");
  $("#txt_obs").val("");
}
function AbrirModalContactos() {
  LimpiarCache();
  $("#modal_listar_contacto").modal({ backdrop: 'static', keyboard: false });
  $("#modal_listar_contacto").modal('show');
}

