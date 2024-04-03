<script type="text/javascript" src="../js/colasinvitado.js?rev=<?php echo time(); ?>"></script>
<div class="col-md-12">
    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">BIENVENIDO AL CONTENIDO DE REGISTRO ATENCION AL CLIENTE</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <div class="col-lg-8">
                    <div class="input-group">
                        <input type="text" class="global_filter form-control" id="global_filter" placeholder="Ingresar dato a buscar">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div><br>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-primary" id="btnActualizar" style="width:100%"><i class="fa fa-refresh"></i>&nbsp;Actualizar</button>
                </div>
               
                <div class="col-lg-2">
                    <button type="button" style="width:100%" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                        <i class="fa fa-warning"></i>&nbsp;Criterio de Evaluacion
                    </button>
                </div>
            </div>
            <table id="tabla_registro_colas" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Hora de LLamada</th>
                        <th>Agente</th>
                        <th>Evento</th>
                        <th>Numero de Cliente</th>
                        <th>Registrar Cli.</th>
                        <th>Registrar Soli.</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Hora de LLamada</th>
                        <th>Agente</th>
                        <th>Evento</th>
                        <th>Numero de Cliente</th>
                        <th>Registrar Cli.</th>
                        <th>Registrar Soli.</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal_registrar_emisor" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Registro Cliente</b></h4>
                </div>

                <div class="modal-body">
                    <div class="col-lg-12">
                        <label for="">Titulo</label>
                        <select class="js-example-basic-single" name="state" id="cbm_titulo" style="width:100%;">
                            <option value="Sr.">Sr.</option>
                            <option value="Sra.">Sra.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Dra.">Dra.</option>
                            <option value="Ing.">Ing.</option>
                            <option value="Lic.">Lic.</option>
                        </select><br><br>
                    </div>
                    <div class="col-lg-12">
                        <label for=""> Nombre del Cliente</label>
                        <input type="text" class="form-control" id="txt_nomcliente" placeholder="Ingrese nombre cliente..."><br>
                    </div>


                    <div class="col-lg-12">
                        <label for=""> Apellido del Cliente</label>
                        <input type="text" class="form-control" id="txt_apecliente" placeholder="Ingrese Apellido cliente..."><br>
                    </div>

                    <div class="col-lg-12">
                        <label for="">Tipo de Documento</label>
                        <select class="js-example-basic-single" name="state" id="cbm_docidentidad" style="width:100%;">
                            <option value="DNI">DNI</option>
                            <option value="PASAPORTE">PASAPORTE</option>
                            <option value="CARNET-EXTRANJERIA">CARNET-EXTRANJERIA</option>
                        </select><br><br>
                    </div>

                    <div class="col-lg-12">
                        <label for=""> Numero de Documento</label>
                        <input type="text" class="form-control" id="txt_numerodoc" placeholder="Ingrese numero de documento..."><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Sexo</label>
                        <select class="js-example-basic-single" name="state" id="cbm_sexo" style="width:100%;">
                            <option value="Masculino">MASCULINO</option>
                            <option value="Femenino">FEMENINO</option>
                        </select><br><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Direccion</label>
                        <input type="text" class="form-control" id="txt_direccion" placeholder="Ingrese Direccion cliente..."><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Numero del Cliente</label>
                        <input type="text" class="form-control" id="txt_numecliente" placeholder="Ingrese numero de cliente..." disabled><br>
                    </div>

                    <div class="col-lg-12">
                        <label for="">Encargado</label>
                        <select class="js-example-basic-single" id="cbm_encargado" style="width:100%;">
                        </select><br><br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="Registrar_emisor()"><i class="fa fa-check"><b>&nbsp;Agregar</b></i></button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
                </div>
            </div>
        </div>
    </div>
</form>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal_registrar_solicitud" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Registro Solicitud</b></h4>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <label for="">Descripcion</label>
                        <textarea name="" id="txt_descripcion" cols="30" rows="5"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Nombre Empresa</label>
                        <input type="text" class="form-control" id="txt_empresa" placeholder="Ingrese nombre empresa..."><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Encargado</label>
                        <select class="js-example-basic-single" id="cbm_encargado2" style="width:100%;">
                        </select><br><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Sede Clinica</label>
                        <select class="js-example-basic-single" name="state" id="cbm_sede" style="width:100%;">
                            <option value="SEDE QUISPICANCHIS">SEDE QUISPICANCHIS</option>
                            <option value="SEDE INFANCIA">SEDE INFANCIA</option>
                            <option value="SEDE URUBAMBA">SEDE URUBAMBA</option>
                        </select><br><br>
                        <input type="text" id="idemisor" hidden>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Estado Tarea</label>
                        <select class="js-example-basic-single" name="state" id="cbm_estado" style="width:100%;" disabled>
                            <option value="listo.">COMPLETADO</option>
                            <option value="en proceso" selected>EN PROCESO</option>
                            <option value="faltante">CONCLUIDO</option>
                        </select><br><br>
                        <input type="text" id="idcols" hidden>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="Registrar_solicitud()"><i class="fa fa-check"><b>&nbsp;Agregar</b></i></button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
                </div>
            </div>
        </div>
    </div>
</form>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal_registrar_calificacion" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Registro Calificacion</b></h4>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <input type="text" id="idCola" hidden>
                        <label for="">Criterio A</label>
                        <input type="number" class="form-control" id="txt_crA" placeholder="Ingrese  A.."><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Criterio B</label>
                        <input type="number" class="form-control" id="txt_crB" placeholder="Ingrese  B..."><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Criterio C</label>
                        <input type="number" class="form-control" id="txt_crC" placeholder="Ingrese  C..."><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Criterio D</label>
                        <input type="number" class="form-control" id="txt_crD" placeholder="Ingrese  D..."><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="">Criterio E</label>
                        <input type="number" class="form-control" id="txt_crE" placeholder="Ingrese  E..."><br>

                    </div>
                    <div class="col-lg-12">
                        <label for="">Observacion</label><br>
                        <textarea name="" id="txt_obs" cols="25" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="Registrar_calificacion()"><i class="fa fa-check"><b>&nbsp;Agregar</b></i></button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
                </div>
            </div>
        </div>
    </div>
</form>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-white"><strong>ADVERTENCIA !!!!!</strong></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Calificación A:</label>
                        <p>El agente proporcionó el speech y fue amigable y acogedor (Puntuación: 1-10)</p>
                    </div>

                    <div class="form-group">
                        <label>Calificación B:</label>
                        <p>UTILIDAD: Ayudó y solucionó con las preguntas, conoce los servicios (Puntuación: 1-10)</p>
                    </div>

                    <div class="form-group">
                        <label>Calificación C:</label>
                        <p>CALIDAD: Satisfacción del cliente y comunicación (Puntuación: 1-10)</p>
                    </div>

                    <div class="form-group">
                        <label>Calificación D:</label>
                        <p>EFICIENCIA: Estar escritos las solicitudes, devolver las llamadas, todo concluido nada pendiente (Puntuación: 1-10)</p>
                    </div>

                    <div class="form-group">
                        <label>Calificación E:</label>
                        <p>EFICACIA: Lograr vender (Puntuación: 1-10)</p>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light pull-left" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</form>

<script src="../js/usuario.js"></script>

<script>
    $(document).ready(function() {
        
        listar_registro_colas();
        listar_combo_encargado();

        $("#btnActualizar").click(function() {
            $("#tabla_registro_colas").DataTable().ajax.reload();
        });

        $('.js-example-basic-single').select2();
    });
</script>