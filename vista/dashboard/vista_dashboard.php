<script type="text/javascript" src="../js/dashboard_callcenter.js?rev=<?php echo time(); ?>"></script>
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <a href="https://wa.me/+51989316622" class="btn btn-success" target="_blank">
                <i class='fa fa-whatsapp'></i> Click!! Comunicarse con CALL-CENTER
            </a>

        </div><br><br>
    </div>

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3 id="txtllamadarec">Cargando... </h3> <!-- Agrega un texto de carga inicial -->
                    <p id="txtllamadafe">Cargando...</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-telephone"></i>
                </div>
                <a href="#" onclick="AbriModalRespondidas()" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3 id="txt_call_busy">Cargando...</h3>
                    <p id="txt_today_busy">Cargando...</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-telephone"></i>
                </div>
                <a href="#" onclick="OpenModalBusy()" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 id="txtcall_noanswer">Cargando...</h3>
                    <p id="txt_today">Cargando...</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-telephone"></i>
                </div>
                <a href="#" onclick="OpenModalNoAnswer()" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 id="txtsolicitudhoy">0</h3>
                    <p id="txtsolifech">---</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Clientes Frecuentes de la Clinica Peruano Suiza</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="tabla_clientes_frecuentes" class="display responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre Cliente</th>
                            <th>Apellido Cliente</th>
                            <th>Numero Llamante</th>
                            <th>Cantidad Llamadas</th>
                            <th>Ultima Llamada</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid bg-green-gradient">
                <div class="box-header ui-sortable-handle" style="cursor: move;">
                    <i class="fa fa-calendar"></i>
                    <h3 class="box-title">Calendar</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <!-- button with a dropdown -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bars"></i></button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Add new event</a></li>
                                <li><a href="#">Clear events</a></li>
                                <li class="divider"></li>
                                <li><a href="#">View calendar</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding" style="">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%">
                        <div class="datepicker datepicker-inline">
                            <div class="datepicker-days" style="">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th colspan="7" class="datepicker-title" style="display: none;"></th>
                                        </tr>
                                        <tr>
                                            <th class="prev">«</th>
                                            <th colspan="5" class="datepicker-switch">October 2026</th>
                                            <th class="next">»</th>
                                        </tr>
                                        <tr>
                                            <th class="dow">Su</th>
                                            <th class="dow">Mo</th>
                                            <th class="dow">Tu</th>
                                            <th class="dow">We</th>
                                            <th class="dow">Th</th>
                                            <th class="dow">Fr</th>
                                            <th class="dow">Sa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="old day" data-date="1790467200000">27</td>
                                            <td class="old day" data-date="1790553600000">28</td>
                                            <td class="old day" data-date="1790640000000">29</td>
                                            <td class="old day" data-date="1790726400000">30</td>
                                            <td class="day" data-date="1790812800000">1</td>
                                            <td class="day" data-date="1790899200000">2</td>
                                            <td class="day" data-date="1790985600000">3</td>
                                        </tr>
                                        <tr>
                                            <td class="day" data-date="1791072000000">4</td>
                                            <td class="day" data-date="1791158400000">5</td>
                                            <td class="day" data-date="1791244800000">6</td>
                                            <td class="day" data-date="1791331200000">7</td>
                                            <td class="day" data-date="1791417600000">8</td>
                                            <td class="day" data-date="1791504000000">9</td>
                                            <td class="day" data-date="1791590400000">10</td>
                                        </tr>
                                        <tr>
                                            <td class="day" data-date="1791676800000">11</td>
                                            <td class="day" data-date="1791763200000">12</td>
                                            <td class="day" data-date="1791849600000">13</td>
                                            <td class="day" data-date="1791936000000">14</td>
                                            <td class="day" data-date="1792022400000">15</td>
                                            <td class="day" data-date="1792108800000">16</td>
                                            <td class="day" data-date="1792195200000">17</td>
                                        </tr>
                                        <tr>
                                            <td class="day" data-date="1792281600000">18</td>
                                            <td class="day" data-date="1792368000000">19</td>
                                            <td class="day" data-date="1792454400000">20</td>
                                            <td class="day" data-date="1792540800000">21</td>
                                            <td class="day" data-date="1792627200000">22</td>
                                            <td class="day" data-date="1792713600000">23</td>
                                            <td class="day" data-date="1792800000000">24</td>
                                        </tr>
                                        <tr>
                                            <td class="day" data-date="1792886400000">25</td>
                                            <td class="day" data-date="1792972800000">26</td>
                                            <td class="day" data-date="1793059200000">27</td>
                                            <td class="day" data-date="1793145600000">28</td>
                                            <td class="day" data-date="1793232000000">29</td>
                                            <td class="day" data-date="1793318400000">30</td>
                                            <td class="day" data-date="1793404800000">31</td>
                                        </tr>
                                        <tr>
                                            <td class="new day" data-date="1793491200000">1</td>
                                            <td class="new day" data-date="1793577600000">2</td>
                                            <td class="new day" data-date="1793664000000">3</td>
                                            <td class="new day" data-date="1793750400000">4</td>
                                            <td class="new day" data-date="1793836800000">5</td>
                                            <td class="new day" data-date="1793923200000">6</td>
                                            <td class="new day" data-date="1794009600000">7</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="7" class="today" style="display: none;">Today</th>
                                        </tr>
                                        <tr>
                                            <th colspan="7" class="clear" style="display: none;">Clear</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="datepicker-months" style="display: none;">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th colspan="7" class="datepicker-title" style="display: none;"></th>
                                        </tr>
                                        <tr>
                                            <th class="prev">«</th>
                                            <th colspan="5" class="datepicker-switch">2026</th>
                                            <th class="next">»</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month focused">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="7" class="today" style="display: none;">Today</th>
                                        </tr>
                                        <tr>
                                            <th colspan="7" class="clear" style="display: none;">Clear</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="datepicker-years" style="display: none;">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th colspan="7" class="datepicker-title" style="display: none;"></th>
                                        </tr>
                                        <tr>
                                            <th class="prev">«</th>
                                            <th colspan="5" class="datepicker-switch">2020-2029</th>
                                            <th class="next">»</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><span class="year old">2019</span><span class="year">2020</span><span class="year">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year focused">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year new">2030</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="7" class="today" style="display: none;">Today</th>
                                        </tr>
                                        <tr>
                                            <th colspan="7" class="clear" style="display: none;">Clear</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="datepicker-decades" style="display: none;">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th colspan="7" class="datepicker-title" style="display: none;"></th>
                                        </tr>
                                        <tr>
                                            <th class="prev">«</th>
                                            <th colspan="5" class="datepicker-switch">2000-2090</th>
                                            <th class="next">»</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade">2010</span><span class="decade focused">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="7" class="today" style="display: none;">Today</th>
                                        </tr>
                                        <tr>
                                            <th colspan="7" class="clear" style="display: none;">Clear</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="datepicker-centuries" style="display: none;">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th colspan="7" class="datepicker-title" style="display: none;"></th>
                                        </tr>
                                        <tr>
                                            <th class="prev">«</th>
                                            <th colspan="5" class="datepicker-switch">2000-2900</th>
                                            <th class="next">»</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="7" class="today" style="display: none;">Today</th>
                                        </tr>
                                        <tr>
                                            <th colspan="7" class="clear" style="display: none;">Clear</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-6">

            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Responsive Hover Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" style="height:240px;">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-primary">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-danger">Denied</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
</section>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal_registro_atendidas" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Registro De Llamadas Respondidas Hoy</b></h4>
                </div>
                <div class="modal-body">

                    <div class="box-body">

                        <table id="tabla_registrar_respondidas" class="display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha Hora</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Disposicion</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha Hora</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Disposicion</th>
                                </tr>
                            </tfoot>
                        </table>
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
    <div class="modal fade" id="modal_registro_ocupadas" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Registro De Llamadas Ocupadas Hoy</b></h4>
                </div>
                <div class="modal-body">

                    <div class="box-body">

                        <table id="tabla_registrar_ocupadas" class="display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha Hora</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Disposicion</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha Hora</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Disposicion</th>
                                </tr>
                            </tfoot>
                        </table>
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
    <div class="modal fade" id="modal_registro_omitidas" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Registro De Llamadas Omitidas Hoy</b></h4>
                </div>
                <div class="modal-body">

                    <div class="box-body">

                        <table id="tabla_registrar_omitidas" class="display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha Hora</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Disposicion</th>


                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha Hora</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Disposicion</th>
                                </tr>
                            </tfoot>
                        </table>
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
    LlamadasRespHoy();
    SolicitudesRegHoy();
    Call_No_Answer();
    Call_Busy();
    List_Call_Answered();
    List_Call_Busy();
    List_Call_NoAnswer();
    List_Frecuency_Client();
</script>