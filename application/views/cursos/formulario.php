<style>
    /*.form-group {text-align:center;}*/
    /*#add {text-align:center;}
    .btn {text-align:center;}*/
</style>

<div class="container-fluid text-left">    
    <div class="row content">
        <div class="col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4 col-xs-offset-0 col-xs-12">
        
        <div class="form-group">
            <?= form_open("/cursos/recibirDatos") ?>
            <?
                $nombre = array(
                    'name' => 'nombre',
                    'placeholder' => 'Escriba',
                    'class' => 'form-control'
                );

                $videos = array(
                    'name' => 'videos',
                    'placeholder' => 'Escriba',
                    'class' => 'form-control'
                );
                $añadir = array(
                    'id' => 'add',
                    'type' => 'submit',
                    'value' => 'AÑADIR', 
                    'class' => 'btn btn-default'
                    
                );
            ?>

            <?= form_label('Nombre: ', 'nombre') ?>
            <?= form_input($nombre) ?>
            </br>
            <?= form_label('Cantidad de Videos: ', 'videos') ?>
            <?= form_input($videos) ?>
            </br>
            <center>
                <?= form_submit($añadir) ?>
            </center>
            
            <?= form_close() ?>
        </div>

        </div>
    </div>
</div>

</body>
</html>