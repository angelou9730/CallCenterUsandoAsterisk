<script type="text/javascript" src="../js/horario.js?rev=<?php echo time(); ?>"></script>
<div class="col-md-12">
    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">BIENVENIDO AL CONTENIDO DE REGISTRO DE HORARIOS </h3>

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
                    <button class="btn btn-danger" style="width:100%" onclick="AbrirModalRegistro()"><i class="glyphicon glyphicon-plus"></i>Nuevo Registro</button>
                </div>
            </div>
            <table id="tabla_registrar_horario" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Hora de Entrada</th>
                        <th>Hora de Salida</th>
                        <th>Dia Semana</th>
                        <th>Estado</th>
                


                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Hora de Entrada</th>
                        <th>Hora de Salida</th>
                        <th>Dia Semana</th>
                        <th>Estado</th>
               

                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal_registro" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Registrar Horario Personal</b></h4>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <label for="">Usuario</label>
                        <select class="js-example-basic-single" name="state" id="cbm_usuario" style="width:100%;">
                        </select><br><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Horario</label>
                        <select class="js-example-basic-single" name="state" id="cbm_horario" style="width:100%;">
                        </select><br><br>
                    </div>

                    <div class="col-lg-12">
                    <label for="">Dia</label>

                        <select class="js-example-basic-multiple" id="cbm_dia_semana" name="states[]" multiple="multiple " style="width:100%;">
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                            <option value="Sabado">Sabado</option>
                        </select><br><br>
                    </div>


                    <div class="modal-footer">
                        <button class="btn btn-primary" onclick="Registrar_Horario_Usuario()"><i class="fa fa-check"><b>&nbsp;Registrar</b></i></button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
                    </div>
                </div>
            </div>
        </div>
</form>
<script>
    $(document).ready(function() {
        listar_registro_horario();
        $('.js-example-basic-single').select2();
        $('.js-example-basic-multiple').select2();
        listar_combo_usuario();
        lsitar_combo_horario();
    });
</script>