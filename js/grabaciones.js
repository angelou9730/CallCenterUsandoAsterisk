var table;
function listar_registro_grabaciones() {
    table = $("#tabla_registro_grabaciones").DataTable({
        "ordering": false,
        "paging": true,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../controlador/grabacion/controlador_audio.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "posicion" },
            {
                "data": "grabacion",
                "render": function (data, type, row) {
                    return '<audio controls><source src="' + data + '" type="audio/wav">Your browser does not support the audio element.</audio>';
                }
            },
            { "data": "nombreAnexo" },
            { "data": "fechaModificacion" },
            {
                "data": "urlDescarga",
                "render": function (data, type, row) {
                    return '<a href="' + data + '" download class="btn btn-primary"><i class="fa fa-download"></i></a>';
                }
            }
        ],
    });


}


