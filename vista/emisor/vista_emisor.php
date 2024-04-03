<script type="text/javascript" src="../js/emisor.js?rev=<?php echo time(); ?>"></script>
<div class="col-md-12">
    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">BIENVENIDO AL CONTENIDO DE REGISTRO DE CLIENTES</h3>

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
            <table id="tabla_registrar_emisor" class="display responsive nowrap" style="width:80%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Apellido</th>
                        <th>Apellido</th>
                        <th>Sexo</th>
                        <th>Direccion</th>
                        <th>Numero de Cliente</th>
                        <th>Encargado del Registro</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>#</th>
                        <th>Titulo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Apellido</th>
                        <th>Apellido</th>
                        <th>Sexo</th>
                        <th>Direccion</th>
                        <th>Numero de Cliente</th>
                        <th>Encargado del Registro</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    listar_registro_emisor();
} );
</script>