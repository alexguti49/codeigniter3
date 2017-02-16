<?= form_open("/cursos/recibirDatos") ?>
<?
    $nombre = array(
        'name' => 'nombre',
        'placeholder' => 'Escriba'
    );

    $videos = array(
        'name' => 'videos',
        'placeholder' => 'Escriba'
    );
?>

<?= form_label('Nombre: ', 'nombre') ?>
<?= form_input($nombre) ?>
</br>
<?= form_label('Cantidad de Videos: ', 'videos') ?>
<?= form_input($videos) ?>
</br>
<?= form_submit('','AÑADIR') ?>

<?= form_close() ?>
</body>
</html>