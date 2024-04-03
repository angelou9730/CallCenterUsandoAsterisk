
        <div class="row" id="contenido_principal">
            <div class="col-md-12">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">BIENVENIDO AL CONTENIDO PRINCIPAL</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="miDatatable" class="display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Grabaciones</th>
                                    <th>Nombre/N° Cliente</th>
                                    <th>Fecha de Modificación</th>
                                    <th>Descargas</th>
                          
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                date_default_timezone_set('America/Lima');
                                $folder = '/var/spool/asterisk/monitor';

                                if (is_dir($folder)) {
                                    $files = glob($folder . '/*.wav');
                                    // Ordenar los archivos por fecha de modificación en orden descendente
                                    array_multisort(array_map('filemtime', $files), SORT_DESC, $files);

                                    if (!empty($files)) {
                                        foreach ($files as $index => $file) {
                                            $fileName = basename($file);
                                            $fileUrl = 'play.php?file=' . urlencode($fileName);
                                            $nombreAnexo = substr($fileName, 0, 9);
                                            $fechaModificacion = date("Y-m-d H:i:s", filemtime($file));
                                ?>
                                            <tr>
                                                <td><?= ($index + 1) ?></td>
                                                <td>
                                                    <audio class="audio-player" controls preload="none">
                                                        <source src="<?= $fileUrl ?>" type="audio/wav">
                                                        Tu navegador no soporta el elemento de audio.
                                                    </audio>
                                                </td>
                                                <td><?= $nombreAnexo ?></td>
                                                <td><?= $fechaModificacion ?></td>
                                                <td><a href="<?= $fileUrl ?>" download class="btn btn-primary"><i class="fa fa-download"></i></a></td>
                                             
                                            </tr>
                                <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No hay grabaciones disponibles.</td></tr>";
                                    }
                                } else {
                                    echo '<tr><td colspan="6">Carpeta no encontrada</td></tr>';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


<script>
    $(document).ready(function() {
        $('#miDatatable').DataTable({
            "ordering": true,
            "paging": true,
            "searching": true,
            "lengthMenu": [
                [5, 25, 50, 100, -1],
                [5, 25, 50, 100, "All"]
            ],
            "pageLength": 5,
            "responsive": true
        });

        // Detener y reiniciar todos los reproductores de medios antes de cambiar la fuente
        $(".audio-player").each(function() {
            this.pause();
            this.currentTime = 0;
        });

        // Cambiar la fuente del reproductor de medios cuando se hace clic en un archivo de audio
        $("table").on("click", ".audio-player", function() {
            $(".audio-player").not(this).each(function() {
                this.pause();
                this.currentTime = 0;
            });
            this.play();
        });
    });
</script>