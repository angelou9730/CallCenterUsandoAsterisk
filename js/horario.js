var table;
function listar_registro_horario() {
    table = $("#tabla_registrar_horario").DataTable({
        "ordering": true,
        "paging": true,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 25,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../controlador/horario/controlador_horario_listar.php",
            type: 'POST'
        },
        "columns": [
            { "data": "posicion" },
        
            { "data": "usuario" },
            { "data": "hora_entrada" },
            { "data": "hora_salida" },
            { "data": "dia_semana",
            render:function(data,type,row){
                if (data == 'Lunes') {
                    return '<span class="label label-primary">' + data + '</span>';
                } else if (data == 'Martes') {
                    return '<span class="label label-success">' + data + '</span>';
                } else if (data == 'Miercoles') {
                    return '<span class="label label-info">' + data + '</span>';
                } else if (data == 'Jueves') {
                    return '<span class="label label-warning">' + data + '</span>';
                } else if (data == 'Viernes') {
                    return '<span class="label label-danger">' + data + '</span>';
                } else if (data == 'Sabado') {
                    return '<span class="label label-primary">' + data + '</span>';
                } else {
                    return data;
                }
            }
            
        },
            { "data": "estado",
            render: function(data,type,row){
                if(data=='activo'){
                    return "<span class='label label-success'>" + data + "</span>";
                }else{
                    return "<span class='label label-danger'>" + data + "</span>";
                }
            }
        },
            

      

        ],

        "language": idioma_espanol,
        select: true
    });
    document.getElementById("tabla_registrar_horario_filter").style.display = "none";
    $('input.global_filter').on('keyup click', function () {
        filterGlobal();
    });
    $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('tr').attr('data-column'));
    });

}
function filterGlobal() {
    $('#tabla_registrar_horario').DataTable().search(
        $('#global_filter').val(),
    ).draw();
}
function AbrirModalRegistro() {
    $("#modal_registro").modal({ backdrop: 'static', keyboard: false });
    $("#modal_registro").modal('show');
  }



 
  function listar_combo_usuario() {
    $.ajax({
        "url": "../controlador/horario/controlador_horario_usuario_listar.php",
        type: 'POST'
    }).done(function (resp) {
   
        var data = JSON.parse(resp);
        var cadena = "";
        if (data.data.length > 0) { // Accede a data.data en lugar de solo data
            for (var i = 0; i < data.data.length; i++) {
                cadena += "<option value='" + data.data[i].usu_id + "'>" + data.data[i].usu_nombre + "</option>";
            }
            $("#cbm_usuario").html(cadena);
        } else {
            cadena += "<option value=''>NO SE ENCONTRARON REGISTROS</option>";
            $("#cbm_usuario").html(cadena);
        }
    })
}
function lsitar_combo_horario() {
    $.ajax({
        "url": "../controlador/horario/controlador_horario_combo_listar.php",
        type: 'POST'
    }).done(function (resp) {
        var data = JSON.parse(resp);
        var cadena = "";
        if (data.data.length > 0) {
            for (var i = 0; i < data.data.length; i++) {
                cadena += "<option value='" + data.data[i].horario_id + "'>" + data.data[i].hora_entrada + "--" + data.data[i].hora_salida + "</option>";
            }
            $("#cbm_horario").html(cadena);
        } else {
            cadena += "<option value=''>NO SE ENCONTRARON REGISTROS</option>";
            $("#cbm_horario").html(cadena);

        }
    })
}

function Registrar_Horario_Usuario(){
    var usu = $("#cbm_usuario").val();
    var horario = $("#cbm_horario").val();
    var dia_semana = $("#cbm_dia_semana").val();
   
    if(usu.length == 0 || horario.length == 0 || dia_semana.length == 0){
        return Swal.fire("Mensaje De Advertencia", "Llene los campos vacíos", "warning");
    }
    
    $.ajax({
        url: "../controlador/horario/controlador_horario_registrar.php",
        type: 'POST',
        data: {
            id_usuario: usu,
            id_horario: horario,
            dia_semana: dia_semana
        }
    }).done(function(resp){
        console.log(resp);
        if(resp === "0"){ // Si el registro es exitoso
            $("#modal_registro").modal('hide');
            Swal.fire("Mensaje De Confirmacion", "Datos correctamente, Nuevo Horario Para Usuario Registrado", "success")            
            .then((value) => {
                LimpiarRegistro();
                table.ajax.reload();
            }); 
        } else if(resp === "1") { // Si hay un error en el registro
            Swal.fire("Mensaje De Advertencia", "Lo sentimos, el nombre del usuario ya se encuentra en nuestra base de datos", "warning");
        } else { // Respuesta inesperada del servidor
            Swal.fire("Mensaje De Error", "Lo sentimos, no se pudo completar el registro", "error");
        }
    }).fail(function(){
        Swal.fire("Mensaje De Error", "Lo sentimos, ocurrió un error en la solicitud", "error");
    });
}

function LimpiarRegistro() {
    $("#cbm_usuario").val("");
    $("#cbm_horario").val("");
    $("#cbm_dia_semana").val("");
}
