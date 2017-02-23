<style>
    main{padding-bottom:100px;}
    thead{font-weight: bold;}
</style>

<main>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4 col-xs-offset-0 col-xs-12">
        <!--<div class="col-sm-8  col-md-6 col-lg-6 col-xs-12 text-left"> -->
        
        <!--<table align="center" class="display" id="example">-->
        
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
                        <td><?php echo $x->cursos_nombre; ?> </td>
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

</body>
</html>