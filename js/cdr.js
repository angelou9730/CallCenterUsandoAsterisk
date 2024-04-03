var table;
function listar_registro_llamadas() {
    table = $("#tabla_registro_llamadas").DataTable({
        "ordering": false,
        "paging": true,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 25,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../controlador/cdr/controlador_cdr_listar.php",
            "type": "POST"
        },
        "columns": [
            { "data": "posicion" },
            { "data": "calldate" },
            { "data": "NombreCliente",
                "render": function(data, row, type) {
                    if (data == '201') {
                        return "<span style='font-weight: bold;'>Call Center</span>";
                    } else {
                        return data;
                    }
                }
            },
            {
                "data": "NombreCliente2",
                "render": function(data, type, row) {
                    if (data == '900') {
                        return "<span style='font-weight: bold;'>Call Center</span>";



                    } else {
                        return data;
                    }
                }
            },
            {
                "data": "disposition",
                "render": function(data, type, row) {
                    if (data == 'ANSWERED') {
                        return "<span class='label label-success'>ATENDIDA <i class='fa fa-phone'></i></span>";
                    } else if (data == 'BUSY') {
                        return "<span class='label label-warning'>OCUPADO <i class='fa fa-phone'></i></span>";
                    } else {
                        return "<span class='label label-danger'>OMITIDA <i class='fa fa-phone'></i></span>";
                    }
                }
            },
        ],
        "language": idioma_espanol,
        "select": true
    });

    document.getElementById("tabla_registro_llamadas_filter").style.display = "none";

    $('input.global_filter').on('keyup click', function() {
        filterGlobal();
    });

    $('input.column_filter').on('keyup click', function() {
        filterColumn($(this).parents('tr').attr('data-column'));
    });
}

function filterGlobal() {
    $('#tabla_registro_llamadas').DataTable().search(
      $('#global_filter').val(),
    ).draw();
}