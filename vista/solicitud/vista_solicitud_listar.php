<script type="text/javascript" src="../js/solicitud.js?rev=<?php echo time(); ?>"></script>
<style>


</style>
<div class="col-md-12">
    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">BIENVENIDO AL CONTENIDO DE REGISTRO DE SOLICITUDES</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <div class="col-lg-10">
                    <div class="input-group">
                        <input type="text" class="global_filter form-control" id="global_filter" placeholder="Ingresar dato a buscar">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div><br>
                </div>
                <div class="col-lg-2">

                    <button type="button"  style="width:80%" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                        <i class="fa fa-warning"></i>&nbsp;Revisar
                    </button>
                </div>
            </div>
            <table id="tabla_registro_solicitud" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>

                        <th>Fecha de Registro</th>
                        <th>Sede</th>
                        <th>Nombre de la Empresa</th>
                        <th>Nombre Completo</th>
                        <th>Direccion</th>
                        <th>Encargado Tarea</th>
                        <th>Estado</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>

                        <th>Fecha de Registro</th>
                        <th>Sede</th>
                        <th>Nombre de la Empresa</th>
                        <th>Nombre Completo</th>
                        <th>Direccion</th>
                        <th>Encargado Tarea</th>
                        <th>Estado</th>
                        <th>Acciones</th>

                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal_editar_solicitud" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Editar Estado Tarea</b></h4>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <label for="">Estado</label>
                        <input type="text" id="txtidsolicitud" hidden>
                        <select class="js-example-basic-single" name="state" id="cbm_solicitud_editar" style="width:100%;">
                            <option value="listo">CONCLUIDO</option>
                            <option value="en proceso">EN PROCESO</option>
                            <option value="faltante">NO PROCESADA</option>

                        </select><br><br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="Modificar_estado_tarea()"><i class="fa fa-check"><b>&nbsp;Modificar</b></i></button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
                </div>
            </div>
        </div>
    </div>
</form>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal_mostrar_tarea" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Tarea</b></h4>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <label for="">Estado</label>
                        <input type="text" id="txtidsolicitud2" hidden>
                        <textarea id="txt_mostrar_tarea" cols="30" rows="10" readonly>
                    </textarea><br><br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
                </div>
            </div>
        </div>
    </div>
</form>


<form autocomplete="false" onsubmit="return false">
    <div class="modal modal-danger fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><strong>ADVERTENCIA !!!!!</strong></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tiempo Límite:</label>
                        <p><strong>Se tendrá un plazo máximo de Media Hora para completar la atención del cliente. Pasada la media hora , no se podrá modificar la solicitud.</strong></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</form>


<script>
    $(document).ready(function() {
        listar_registro_solicitud();
        $('.js-example-basic-single').select2();
    });
</script>