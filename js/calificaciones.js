var table;
function listar_registro_calificaciones() {
    table = $("#tabla_registro_calificaciones").DataTable({
        "ordering": false,
        "paging": true,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 25,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../controlador/calificacion/controlador_calificacion_listar.php",
            type: 'POST'
        },
        "columns": [
            {
                "data": "num", // Columna de numeración
                "render": function (data, type, row, meta) {
                    return meta.row + 1; // Numeración comienza desde 1
                }
            },
            { "data": "created" },
            {
                "data": "agent",
                "render": function (data, type, row) {
                    var createdDate = new Date(row.created);
                    var currentHour = createdDate.getHours();
                    // Lógica basada en la hora actual y el valor de data
                    if (data == 'SIP/201' && ((currentHour >= 8 && currentHour < 13) || (currentHour >= 15 && currentHour < 20))) {
                        return 'NATALY FARFAN ZANES';
                    } else if (data == 'SIP/203' && ((currentHour >= 8 && currentHour < 13) || (currentHour >= 14 && currentHour < 18))) {
                        return 'RODRIGO ENRIQUEZ GUIA';
                    } else if (data == 'SIP/205' && ((currentHour >= 8 && currentHour < 13) || (currentHour >= 14 && currentHour < 18))) {
                        return 'FRECIA';
                    }
                    else {
                        return 'OTRO USUARIO FUERA DE HORARIO'; // Por ejemplo, en otros horarios
                    }
                }
            },
            { "data": "criterioA" },
            { "data": "criterioB" },
            { "data": "criterioC" },
            { "data": "criterioD" },
            { "data": "criterioE" },
            {
                "data": null,
                "render": function (data, type, row) {     
                    var promedio = (parseInt(row.criterioA) + parseInt(row.criterioB) + parseInt(row.criterioC) + parseInt(row.criterioD) + parseInt(row.criterioE)) / 5;
                    promedio = promedio.toFixed(2);
                    return promedio;
                }
            },
            { "data": "cliente_info" },
            {
                "defaultContent":
                    "<button style='font-size:13px;' type='button' class='mostrar btn btn-success'title='Detalle'><i class='fa fa-eye'></i></button>&nbsp;"
            }
        ],

        "language": idioma_espanol,
        select: true
    });
    document.getElementById("tabla_registro_calificaciones_filter").style.display = "none";
    $('input.global_filter').on('keyup click', function () {
        filterGlobal();
    });
    $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('tr').attr('data-column'));
    });

}
function filterGlobal() {
    $('#tabla_registro_calificaciones').DataTable().search(
        $('#global_filter').val(),
    ).draw();
}
$('#tabla_registro_calificaciones').on('click', '.mostrar', function () {
    var data = table.row($(this).parents('tr')).data();
    if (table.row(this).child.isShown()) {
        var data = table.row(this).data();
    }
    $("#modal_mostrar_observacion").modal({ backdrop: 'static', Keyboard: false });
    $("#modal_mostrar_observacion").modal('show');
    $("#txtidscalificacion").val(data.idCalificacion);
    $("#txt_mostrar_observacion").val(data.observaciones);
    $("#txtnotaA").val(data.criterioA);
    $("#txtnotaB").val(data.criterioB);
    $("#txtnotaC").val(data.criterioC);
    $("#txtnotaD").val(data.criterioD);
    $("#txtnotaE").val(data.criterioE);
    var sum = parseInt(data.criterioA) + parseInt(data.criterioB) + parseInt(data.criterioC) + parseInt(data.criterioD) + parseInt(data.criterioE);
    var prom = sum / 5;
    $("#txtsuma").val(sum);
    $("#txtprom").val(prom);

    var estadoIcono=$("#estadoIcono");
    estadoIcono.empty();
    if (prom >= 3.5) {
        // Si el promedio es mayor o igual a 3.5, mostrar un ícono feliz (puedes cambiarlo por tu propio ícono)
        estadoIcono.append('<span>&#x1F604;</span><span>&#x1F604;</span><span>&#x1F604;</span><span>&#x1F604;</span>');
    } else {
        // Si el promedio es menor a 3.5, mostrar un ícono triste (puedes cambiarlo por tu propio ícono)
        estadoIcono.append('<span>&#x1F614;</span><span>&#x1F614;</span><span>&#x1F614;</span><span>&#x1F614;</span>');
    }
})
