<?php
session_start();
if (!isset($_SESSION['S_IDUSUARIO'])) {
    header('Location: ../Login/index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../assets/img/logo_an.ico" type="image/png">
    <title>SISCALL AdminLTE</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../Plantilla/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Plantilla/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../Plantilla/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../Plantilla/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../Plantilla/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../Plantilla/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../Plantilla/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../Plantilla/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../Plantilla/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../Plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="../Plantilla/plugins/DataTables/datatables.min.css">
    <link rel="stylesheet" href="../Plantilla/plugins/select2/select2.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
    .swal2-popup {
        font-size: 1.6rem !important;
    }
</style>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="index.php" class="logo">
                <span class="logo-mini"><b>S</b>IS</span>
                <span class="logo-lg"><b>SIS</b>CALL</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img id="img_nav" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $_SESSION['S_USER']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img id="img_subnav" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo $_SESSION['S_USER']; ?> 
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" onclick="AbrirModalEditarContra()" class="btn btn-default btn-flat">Cambiar Contrase&ntilde;a</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../controlador/usuario/controlador_cerrar_session.php" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <?php if (isset($_SESSION['S_ROL']) && $_SESSION['S_ROL'] === 'ADMINISTRADOR') : ?>
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->

                    <div class="user-panel">
                        <div class="pull-left image">
                            <img id="img_lateral" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $_SESSION['S_USER']; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->

                    <ul class="sidebar-menu" data-widget="tree">

                        <li class="header">MAIN NAVIGATION</li>

                        <li class="active treeview">
                            <a onclick="cargar_contenido('contenido_principal','dashboard/vista_dashboard.php')">
                                <i class="fa fa-dashboard "></i> <span>Dashbord</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="treeview" style="height: auto;">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Usuario</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">
                                <li><a onclick="cargar_contenido('contenido_principal','usuario/vista_usuario_listar.php')">
                                        <i class="fa fa-user"></i> Usuario Lista
                                    </a></li>
                                <li><a onclick="cargar_contenido('contenido_principal','horario/vista_usuario_horario.php')">
                                        <i class="fa fa-clock-o"></i> <span>Horario</span>
                                        <span class="pull-right-container">
                                            <small class="label pull-right bg-green">new</small>
                                        </span>

                                    </a></li>

                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-headphones"></i> <span>Call-Center</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">

                                <li>
                                    <a onclick="cargar_contenido('contenido_principal','registro_telefonico/vista_registro_llamadas.php')">
                                        <i class="fa fa-phone"></i> <span>Registro de Llamadas</span>

                                    </a>
                                </li>
                                <li>
                                    <a onclick="cargar_contenido('contenido_principal','solicitud/vista_solicitud_listar.php')">
                                        <i class="fa fa-tasks"></i> <span>Solicitud</span>
                                    </a>
                                </li>
                                <li>
                                    <a onclick="cargar_contenido('contenido_principal','colas/vista_registro_colas.php')">
                                        <i class="fa fa-hourglass-half"></i> <span>Atencion Call Center</span>

                                    </a>
                                </li>
                                <li>
                                    <a onclick="cargar_contenido('contenido_principal','emisor/vista_emisor.php')">
                                        <i class="fa  fa-book"></i> <span>Registro de Clientes</span>
                                    </a>
                                </li>


                                <li>
                                    <a onclick="cargar_contenido('contenido_principal','calificacion/vista_registro_calificaciones.php')">
                                        <i class="fa fa-star"></i> <span>Calificacion de Llamada</span>

                                    </a>
                                </li>
                                <li>
                                    <a onclick="cargar_contenido('contenido_principal','prueba.php')">
                                        <i class="fa fa-microphone"></i> <span>Registro de Grabaciones</span>

                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </section>
                <!-- /.sidebar -->
            </aside>
        <?php endif; ?>



        <?php if (isset($_SESSION['S_ROL']) && $_SESSION['S_ROL'] === 'CALL-CENTER') : ?>
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->

                    <div class="user-panel">
                        <div class="pull-left image">
                            <img id="img_lateral" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $_SESSION['S_USER']; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>



                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->

                    <ul class="sidebar-menu" data-widget="tree">

                        <li class="header">MAIN NAVIGATION</li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-headphones"></i> <span>Call-Center</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">

                                <li>
                                    <a onclick="cargar_contenido('contenido_principal','registro_telefonico/vista_registro_llamadas.php')">
                                        <i class="fa fa-phone"></i> <span>Registro de Llamadas</span>

                                    </a>
                                </li>
                                <li>
                                    <a onclick="cargar_contenido('contenido_principal','solicitud/vista_solicitud_listar.php')">
                                        <i class="fa fa-tasks"></i> <span>Solicitud</span>
                                    </a>
                                </li>
                                <li>
                                    <a onclick="cargar_contenido('contenido_principal','colas/vista_registro_colas2.php')">
                                        <i class="fa fa-hourglass-half"></i> <span>Atencion Call Center</span>

                                    </a>
                                </li>
                                <li>
                                    <a onclick="cargar_contenido('contenido_principal','emisor/vista_emisor.php')">
                                        <i class="fa  fa-book"></i> <span>Registro de Clientes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </section>
                <!-- /.sidebar -->
            </aside>
        <?php endif; ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <input type="text" id="txtidprincipal" value="<?php echo $_SESSION['S_IDUSUARIO'] ?>" hidden>
                <input type="text" id="usuarioprincipal" value="<?php echo $_SESSION['S_USER'] ?>" hidden>
                <input type="text" id="rolusuario" value="<?php echo $_SESSION['S_ROL'] ?>" hidden>

                <div class="row" id="contenido_principal">
                    <div class="col-md-12">
                        <div class="box box-primary box-solid">
                            <div class="box-header with-border">

                                <h3 class="box-title">BIENVENIDO AL CONTENIDO PRINCIPAL</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                CONTENIDO PRINCIPAL

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>




        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.18
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark" style="display: none;">

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                </div>
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <form autocomplete="false" onsubmit="return false">
        <div class="modal fade" id="modal_editar_contra" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>Modificar Contrase&ntilde;a</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg-12">
                            <input type="text" id="txtcontra_bd" hidden>
                            <label for="">Contrase&ntilde;a Actual</label>
                            <input type="password" class="form-control" id="txtcontraactual_editar" placeholder="Contrase&ntilde;a Actual"><br>
                        </div>
                        <div class="col-lg-12">

                            <label for="">Nueva Contrase&ntilde;a</label>
                            <input type="password" class="form-control" id="txtcontranu_editar" placeholder=" Nueva Contrase&ntilde;a"><br>
                        </div>
                        <div class="col-lg-12">

                            <label for="">Repetir Contrase&ntilde;a</label>
                            <input type="password" class="form-control" id="txtcontrare_editar" placeholder="Repetir Contrase&ntilde;a"><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" onclick="Editar_Contra()"><i class="fa fa-check"><b>&nbsp;Modificar</b></i></button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- jQuery 3 -->
    <script src="../Plantilla/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../Plantilla/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        var idioma_espanol = {
            select: {
                rows: "%d fila seleccionada"
            },
            "sProcessing": "Procesando",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ning&uacute;n dato disponible en esta tabla",
            "sInfo": "Registros del (_START_ al _END_) total de _TOTAL_ registros",
            "sInfoEmpty": "Resgistros del (0 al 10) total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "<b>No se encontraron datos</b>",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ultimo",
                "sNext": "Siguiente",
                "sPrevius": "Anterior"
            },
            "oAria": {
                "sSortAscending": ":Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ":Activar para ordenar la columna de manera descendente"
            }
        }

        function cargar_contenido(contenedor, contenido) {

            $("#" + contenedor).load(contenido);

        }
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../Plantilla/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="../Plantilla/bower_components/raphael/raphael.min.js"></script>

    <!-- Sparkline -->
    <script src="../Plantilla/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../Plantilla/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../Plantilla/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../Plantilla/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../Plantilla/bower_components/moment/min/moment.min.js"></script>
    <script src="../Plantilla/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../Plantilla/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../Plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../Plantilla/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../Plantilla/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../Plantilla/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <!-- AdminLTE for demo purposes -->
    <script src="../Plantilla/dist/js/demo.js"></script>
    <script src="../Plantilla//plugins/DataTables/datatables.min.js"></script>
    <script src="../Plantilla//plugins/select2/select2.min.js"></script>
    <script src="../Plantilla//plugins/sweetalert2/sweetalert2.js"></script>
    <script src="../js/usuario.js"></script>





    <script>
        TraerDatosUsuario();
    </script>



</body>

</html>