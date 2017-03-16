<style>
    main{padding-bottom:100px;}
    thead{font-weight: bold;}
</style>

<? if($cursos){ ?>

<?  $url = $this->uri->segment(2);
    if($url != "index"){
      header ("Location: http://localhost/alex/codeigniter3/index.php/cursos/index/");
    }
?>
<main>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4 col-xs-offset-0 col-xs-12">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>NOMBRE</td>
                            <td>VIDEOS</td>
                        </tr>
                    </thead>
                    <tbody>

                        <? foreach($cursos->result() as $x){ ?>

                        <tr>
                            <td><a href="<?= $x->cursos_id; ?>"><?= $x->cursos_nombre; ?> </a></td>
                            <td><?php echo $x->cursos_videos; ?> </td>
                        </tr>
                        <? } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</main>

<? } else { echo "<h4> No existe registro con ese segmento</h4>";} ?>

</body>
</html>
