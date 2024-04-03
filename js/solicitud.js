var table;
function listar_registro_solicitud() {
    
      table = $("#tabla_registro_solicitud").DataTable({
        "ordering": false,
        "paging": true,
        "searching": { "regex": true },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 25,
        "destroy": true,
        "async": false,
        "processing": true,
        "ajax": {
            "url": "../controlador/solicitud/controlador_solicitud_listar.php",
            type: 'POST'
        },
        "columns": [
            { "data": "posicion" },
            { "data": "fechaHoraCreacion" },
            { "data": "estado" },
            { "data": "empresa" },
            { "data": "nombreCompletoCliente" },
            { "data": "direccion" },
            { "data": "nombreRegistroTarea" },
            { "data": "estadoTarea",
            render: function (data, type, row) {
                if (data == 'en proceso') {
                    return "<span class='label label-warning'>EN PROCESO</span>";
                } else if(data=='listo') {
                    return "<span class='label label-success'>CONCLUIDO</span>";
                }else{
                    return "<span class='label label-danger'>FALTANTE</span>";
                }
              }
        
        },
            { "defaultContent": 
            "<button style='font-size:13px;' type='button' class='editar btn btn-primary'><i class='fa fa-edit'></i></button>&nbsp;<button style='font-size:13px;' type='button' class='mostrar btn btn-success'><i class='fa fa-eye'></i></button>&nbsp;" }
        ],
        "language": idioma_espanol,
        select: true
    });
    document.getElementById("tabla_registro_solicitud_filter").style.display = "none";
    $('input.global_filter').on('keyup click', function () {
        filterGlobal();
    });
    $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('tr').attr('data-column'));
    });
}
function filterGlobal() {
    $('#tabla_registro_solicitud').DataTable().search(
      $('#global_filter').val(),
    ).draw();
}
$('#tabla_registro_solicitud').on('click','.editar',function(){
    var data =table.row($(this).parents('tr')).data();
    if(table.row(this).child.isShown()){
        var data=table.row(this).data();
    }
    if (data.estadoTarea === 'listo' || data.estadoTarea === 'faltante') {
        // Si la tarea está en estado "listo" o "faltante", el botón de editar se bloquea
        return ;
    }
    $("#modal_editar_solicitud").modal({backdrop:'static',Keyboard:false});
    $("#modal_editar_solicitud").modal('show');
    $("#txtidsolicitud").val(data.idTarea);
    $("#cbm_solicitud_editar").val(data.estadoTarea).trigger("change");
})
$('#tabla_registro_solicitud').on('click','.mostrar',function(){
    var data =table.row($(this).parents('tr')).data();
    if(table.row(this).child.isShown()){
        var data=table.row(this).data();
    }
    $("#modal_mostrar_tarea").modal({backdrop:'static',Keyboard:false});
    $("#modal_mostrar_tarea").modal('show');
    $("#txtidsolicitud2").val(data.idTarea);
    $("#txt_mostrar_tarea").val(data.descripcion);
})

function Modificar_estado_tarea(){
    var idsolicitud = $("#txtidsolicitud").val();
    var estado_solicitud=$("#cbm_solicitud_editar").val();

    if(idsolicitud.length==0 || estado_solicitud.length==0){
        return Swal.fire("Mensaje De Advertencia","Llene los campos vacios","warning"); 
    }
    
    $.ajax({
        "url":"../controlador/solicitud/controlador_solicitud_estado_modificar.php",
        type:'POST',
        data:{
            idsolicitud:idsolicitud,
            estado_solicitud:estado_solicitud
        }
    }).done(function(resp){
        
        if(resp>0){
            $("#modal_editar_solicitud").modal('hide');
            Swal.fire("Mensaje De Confirmacion","Estado Modificado Correctamente","success")
            .then((value)=>{
                table.ajax.reload();
            });            
        }else{
            Swal.fire("Mensaje De Error","Lo Sentimos, hay un problema con el servidor","error")
            
        }
    })
}
