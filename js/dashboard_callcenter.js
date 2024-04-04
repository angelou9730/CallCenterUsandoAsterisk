function LlamadasRespHoy() {
    var llamrechoy = $('#txtllamadarec'); // Obtener el elemento h3 por su ID
    var llamadafe = $('#txtllamadafe');
    var atendidas = "Atendidas";
    $.ajax({
        url: "../controlador/dashboard/controlador_llamadasrec.php",
        type: "POST",
        data: {
            llamrechoy: llamrechoy.val(),
            llamadafe: llamadafe.val()

        }
    }).done(function (respuesta) {
        // Convertir la respuesta JSON en un objeto JavaScript
        var datos = JSON.parse(respuesta);

        // Verificar si se recibieron datos
        if (datos.length > 0) {
            // Actualizar el contenido del elemento h3 con los datos obtenidos
            llamrechoy.html(datos[0].total_llamadas_respondidas + ' <sup style="font-size: 20px">' + atendidas + '</sup>');
            llamadafe.text(datos[0].fecha_llamada);

        } else {
            // Si no se recibieron datos, mostrar un mensaje de error o vacío
            llamrechoy.text("No se encontraron datos");
        }
    });
}

function Call_No_Answer() {
    var calltoday = $('#txtcall_noanswer');
    var today = $('#txt_today');
    var no_answer = 'No Atendidas';
    $.ajax({
        url: "../controlador/dashboard/controlador_call_noanswer.php",
        type: 'POST',
        data: {
            calltoday: calltoday.val(),
            today: today.val()
        }
    }).done(function (resp) {
        var datos = JSON.parse(resp);
        if (datos.length > 0) {
            calltoday.html(datos[0].total_llamadas_no_respondidas + ' <sup style="font-size: 20px">' + no_answer + '</sup>');
            today.text(datos[0].fecha_llamada);
        } else {
            calltoday.text("No se encontraron datos");
        }
    });
}
function Call_Busy() {
    const callbusy = $('#txt_call_busy');
    const today_busy = $('#txt_today_busy');
    var busy = 'Ocupado';

    var today = new Date(); // Obtiene la fecha actual
    var month = today.getMonth(); // Obtiene el mes (0-11)
    var year = today.getFullYear(); // Obtiene el año (YYYY)
    var fecha=today.getDate();
    var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                  "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var formattedDate =year +" "+ monthNames[month] +" "+ fecha;


    $.ajax({
        url: "../controlador/dashboard/controlador_call_busy.php",
        type: 'POST',
        data: {
            callbusy: callbusy.val(),
            today_busy: today_busy.val()
        }
    }).done(function (resp) {
        var datos = JSON.parse(resp);
        if (datos.length > 0) {
            callbusy.html(datos[0].total_llamadas_ocupadas + ' <sup style="font-size: 20px">' + busy + '</sup>');
            today_busy.text(datos[0].fecha_llamada);
        } else {
            callbusy.text("No registraron.");
            today_busy.text(formattedDate);
        }
    });
}

function SolicitudesRegHoy() {
    const solihoy = $('#txtsolicitudhoy');
    const solifech = $('#txtsolifech');
    var proceso = "Soli. Proceso";
    $.ajax({
        url: "../controlador/dashboard/controlador_solicitudproc.php",
        type: 'POST',
        data: {
            solihoy: solihoy.val(),
            solifech: solifech.val()
        }
    }).done(function (resp) {
        var datos = JSON.parse(resp);

        if (datos.length > 0) {
            solihoy.html(datos[0].total_solicitudes_registradas + ' <sup style="font-size: 20px">' + proceso + '</sup>');
            solifech.text(datos[0].fecha_solicitud);
        }
    })
}


function AbriModalRespondidas() {
    $("#modal_registro_atendidas").modal({ backdrop: 'static', keyboard: false });
    $("#modal_registro_atendidas").modal('show');
}

var table;
function List_Call_Answered() {
    table = $("#tabla_registrar_respondidas").DataTable({
        "ordering": false,
        "paging": true,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "processing": true,
        "ajax": {
            "url": "../controlador/dashboard/controlador_list_call_answered.php",
            type: 'POST'
        },
        "columns": [
            { "data": "posicion" },
            { "data": "calldate" },
            { "data": "NombreCliente" },

            {
                "data": "dst",
                render: function (data, type, row) {
                    if (data == '900') {
                        return "<strong>Call Center</strong>";
                    }
                }
            },
            
            {
                "data": "disposition",
                render: function (data, type, row) {
                    if (data == 'ANSWERED') {
                        return "<span class='label label-success'>ATENDIDA <i class='fa fa-phone'></i></span>";
                    }
                }

            },

        ],

        "language": idioma_espanol,
        select: true
    });

}

function OpenModalBusy() {
    $("#modal_registro_ocupadas").modal({ backdrop: 'static', keyboard: false });
    $("#modal_registro_ocupadas").modal('show');
}
function List_Call_Busy() {
    table = $("#tabla_registrar_ocupadas").DataTable({
        "ordering": false,
        "paging": true,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "processing": true,
        "ajax": {
            "url": "../controlador/dashboard/controlador_list_call_busy.php",
            type: 'POST'
        },
        "columns": [
            { "data": "posicion" },
            { "data": "calldate" },
            { "data": "NombreCliente" },

            {
                "data": "dst",
                render: function (data, type, row) {
                    if (data == '900') {
                        return "<strong>Call Center</strong>";
                    }
                }
            },
            
           
            {
                "data": "disposition",
                render:function(data,type,row){
                    if (data == 'BUSY') {
                        return "<span class='label label-warning'>OCUPADO <i class='fa fa-phone'></i></span>";
                    }
                }
            }

        ],

        "language": idioma_espanol,
        select: true
    });

}

function OpenModalNoAnswer() {
    $("#modal_registro_omitidas").modal({ backdrop: 'static', keyboard: false });
    $("#modal_registro_omitidas").modal('show');
}
function List_Call_NoAnswer() {
    table = $("#tabla_registrar_omitidas").DataTable({
        "ordering": false,
        "paging": true,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "processing": true,
        "ajax": {
            "url": "../controlador/dashboard/controlador_list_call_noanswer.php",
            type: 'POST'
        },
        "columns": [
            { "data": "posicion" },
            { "data": "calldate" },
            { "data": "NombreCliente" },

            {
                "data": "dst",
                render: function (data, type, row) {
                    if (data == '900') {
                        return "<strong>Call Center</strong>";
                    }
                }
            },
            
           
            {
                "data": "disposition",
                render:function(data,type,row){
                    if (data == 'NO ANSWER') {
                        return "<span class='label label-danger'>OMITIDA <i class='fa fa-phone'></i></span>";
                    }
                }
            }

        ],

        "language": idioma_espanol,
        select: true
    });


}


function List_Frecuency_Client() {
    table = $("#tabla_clientes_frecuentes").DataTable({
        "ordering": false,
        "paging": true,
        "searching": { "regex": true },
        "lengthMenu": [[5, 25, 50, 100, -1], [5, 25, 50, 100, "All"]],
        "pageLength": 5,
        "processing": true,
        "ajax": {
            "url": "../controlador/dashboard/controlador_list_frecuency_client.php",
            type: 'POST'
        },
        "columns": [
            { "data": null },
            { "data": "nombreCliente" },
            { "data": "apellidoCliente" },
            { "data": "numero_llamante" },
            { "data": "cantidad_llamadas" },
            { "data": "ultima_llamada" }
        ],

        "language": idioma_espanol,
        select: true,
        "rowCallback": function (row, data, index) {
            $('td:eq(0)', row).html(index + 1);
        }
    });
}
