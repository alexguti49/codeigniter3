<? foreach($cursos->result() as $x){ ?>
    <h3>
        <ul>
            <li> <?= $x->cursos_nombre; ?> </li>
        </ul>
    </h3> 
<? } ?>
</body>
</html>