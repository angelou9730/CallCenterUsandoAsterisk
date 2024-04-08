var table;
function listar_registro_emisor() {
  table = $("#tabla_registrar_emisor").DataTable({
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
      url: "../controlador/emisor/controlador_emisor_listar.php",
      type: "POST",
    },
    columns: [
      { data: "posicion" },
      { data: "titulo" },
      { data: "nombreCliente" },
      { data: "apellidoCliente" },
      { data: "tipodocumento" },
      { data: "numerodocumento" },
      {
        data: "sexo",
        render: function (data, type, row) {
          if (data == "Masculino") {
            return "<span class='label label-primary'><i class='fa fa-mars'> M </i></span>";
          } else {
            return "<span class='label label-danger'><i class='fa fa-venus'> F </i></span>";
          }
        },
      },
      { data: "direccion" },
      { data: "numeroCliente" },
      { data: "Nombre_Completo" },
      {
        defaultContent:
          "<button style='display: block; margin: 0 auto;' type='button' class='wsp btn btn-success'><i class='fa fa-whatsapp'></i></button>&nbsp;",
      },
    ],

    language: idioma_espanol,
    select: true,
  });
  document.getElementById("tabla_registrar_emisor_filter").style.display =
    "none";
  $("input.global_filter").on("keyup click", function () {
    filterGlobal();
  });
  $("input.column_filter").on("keyup click", function () {
    filterColumn($(this).parents("tr").attr("data-column"));
  });
}
function filterGlobal() {
  $("#tabla_registrar_emisor")
    .DataTable()
    .search($("#global_filter").val())
    .draw();
}

$('#tabla_registrar_emisor').on('click','.wsp',function(){
  // Obtener los datos de la fila de la tabla donde se hizo clic
  var data = table.row($(this).parents('tr')).data();
  // Extraer el número de teléfono del objeto de datos
  var phoneclient = data.numeroCliente;
  // Verificar si los primeros números del número de teléfono son "084"
  if (phoneclient.startsWith("084")) {
      // Mostrar una alerta si el número de teléfono comienza con "084"
      alert("No se puede realizar la llamada a este número.");
      return; 
  }
  var message = '¡Hola! Le saludamos desde la Clínica Peruano Suiza. ' +
                'Nuestros servicios incluyen: ' +
                '1. Medicina general ' +
                '2. Especialidades médicas ' +
                '3. Cirugía ' +
                '4. Laboratorio ' +
                'Para obtener más información, visite nuestro sitio web: https://www.cps.com.pe';
  // Construir la URL de WhatsApp con el número de teléfono y el mensaje
  var whatsappURL = 'https://wa.me/' + phoneclient + '?text=' + encodeURIComponent(message);
  // Abrir enlace en otra página
  window.open(whatsappURL, '_blank');
});
