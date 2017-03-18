<div class="container-fluid text-left">
    <div class="row content">
        <div class="col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4 col-xs-offset-0 col-xs-12">
        <h2>Registro de Cursos</h2>

            <?= form_open("/cursos/actualizar/".$id) ?>
            <?
                $nombre = array(
                    'name' => 'nombre',
                    'placeholder' => 'Escriba',
                    'class' => 'form-control',
                    'value' => $curso->result()[0]->cursos_nombre
                );

                $videos = array(
                    'name' => 'videos',
                    'placeholder' => 'Escriba',
                    'class' => 'form-control',
                    'value' => $curso->result()[0]->cursos_videos
                );
                $añadir = array(
                    'id' => 'add',
                    'type' => 'submit',
                    'value' => 'EDITAR',
                    'class' => 'btn btn-default'

                );
            ?>
            <div class="form-group">
                <?= form_label('Nombre: ', 'nombre') ?>
                <?= form_input($nombre) ?>
            </div>

            <div class="form-group">
                <?= form_label('Cantidad de Videos: ', 'videos') ?>
                <?= form_input($videos) ?>
            </div>

            <center>
                <?= form_submit($añadir) ?>
            </center>

            <?= form_close() ?>
        <!--form-->

        </div>
    </div>
</div>

</body>
</html>
