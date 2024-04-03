<script type="text/javascript" src="../js/calificaciones.js?rev=<?php echo time(); ?>"></script>
<div class="col-md-12">
    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">BIENVENIDO AL CONTENIDO DE REGISTRO DE CALIFICACIONES</h3>

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
            </div>
            <table id="tabla_registro_calificaciones" class="display responsive nowrap " style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Hora de LLamada</th>
                        <th>Agente</th>
                        <th>Calf. A</th>
                        <th>Calf. B</th>
                        <th>Calf. C</th>
                        <th>Calf. D</th>
                        <th>Calf. E</th>
                        <th>Calificacion</th>
                        <th>Numero de Cliente</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Hora de LLamada</th>
                        <th>Agente</th>
                        <th>Calf. A</th>
                        <th>Calf. B</th>
                        <th>Calf. C</th>
                        <th>Calf. D</th>
                        <th>Calf. E</th>
                        <th>Calificacion</th>
                        <th>Numero de Cliente</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal_mostrar_observacion" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Detalle de Calificacion</b></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Observacion</label><br>
                            <input type="text" id="txtidscalificacion" hidden>
                            <textarea id="txt_mostrar_observacion" cols="50" rows="5" readonly></textarea><br><br>
                            <div class="col-lg-12">
                                <label for="">Calificacion A:</label><br>
                                <input type="text" id="txtnotaA" readonly>
                            </div>
                            <div class="col-lg-12">
                                <label for="">Calificacion B:</label><br>
                                <input type="text" id="txtnotaB" readonly>
                            </div>
                            <div class="col-lg-12">
                                <label for="">Calificacion C:</label><br>
                                <input type="text" id="txtnotaC" readonly>
                            </div>
                            <div class="col-lg-12">
                                <label for="">Calificacion D:</label><br>
                                <input type="text" id="txtnotaD" readonly>
                            </div>
                            <div class="col-lg-12">
                                <label for="">Calificacion E:</label><br>
                                <input type="text" id="txtnotaE" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Total:</label><br>
                                    <input type="number" id="txtsuma" readonly>
                                </div>
                                <div class="col-lg-12">
                                    <label for="">Promedio:</label><br>
                                    <input type="number" id="txtprom" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="">Estado:</label><br>
                                <div id="estadoIcono" style="font-size: 2em;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        listar_registro_calificaciones();

    });
</script>