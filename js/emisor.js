var table;
function listar_registro_emisor() {
    table = $("#tabla_registrar_emisor").DataTable({
        "ordering": false,
        "paging": true,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 25,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../controlador/emisor/controlador_emisor_listar.php",
            type: 'POST'
        },
        "columns": [
            { "data": "posicion" },
            { "data": "titulo" },
            { "data": "nombreCliente" },
            { "data": "apellidoCliente" },
            { "data": "tipodocumento" },
            { "data": "numerodocumento" },
            {
                "data": "sexo", render: function (data, type, row) {
                    if (data == 'Masculino') {
                        return "<span class='label label-primary'><i class='fa fa-mars'> M </i></span>";
                    } else {
                        return "<span class='label label-danger'><i class='fa fa-venus'> F </i></span>";
                    }
                }

            },
            { "data": "direccion" },
            { "data": "numeroCliente" },
            { "data": "Nombre_Completo" },
            {
                "defaultContent": "<button style='display: block; margin: 0 auto;' type='button' class='wsp btn btn-success'><i class='fa fa-whatsapp'></i></button>&nbsp;"
            }
             

        ],

        "language": idioma_espanol,
        select: true
    });
    document.getElementById("tabla_registrar_emisor_filter").style.display = "none";
    $('input.global_filter').on('keyup click', function () {
        filterGlobal();
    });
    $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('tr').attr('data-column'));
    });

}
function filterGlobal() {
    $('#tabla_registrar_emisor').DataTable().search(
        $('#global_filter').val(),
    ).draw();
}

$('#tabla_registrar_emisor').on('click','.wsp',function(){
    var data =table.row($(this).parents('tr')).data();
    var phoneclient = data.numeroCliente;
    var message='Le saludamos de la Clinica peruano suiza, nuestros servicios son estos:';
    var whatsappURL='https://wa.me/'+phoneclient+'?text='+encodeURIComponent(message);
    window.location.href=whatsappURL;
  });