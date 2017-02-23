<style>
    /* Set black background color, white text and some padding */
    footer {
        background-color: #101010;
        color: white;
        padding: 10px;
        width:100%; 
        position:absolute; 
        bottom:0; 
        left:0;
        }
        footer .sidenav {
            padding-top: 20px;
            background-color: #101010;
            height: 100%;
        }
        /*CUANDO SE TRABAJA CON ID SE UTILIZA: #*/
        #face { color: blue; padding: 0em .5em;}
        #twet { color: turquoise; padding: 0em .5em;}
        #inst { color: mediumvioletred; padding: 0em .5em;}

        p > a { color: white; font-size: 1.3em;}
        p > a:link {text-decoration: none;}
        p > a:hover { color:chartreuse; text-decoration: none;}
        p > a:visited {text-decoration: none;}
    
    @media screen and (max-width: 767px) {
        footer{position:initial;}
    }

</style>

<footer class="container-fluid text-center">

        <div class="col-sm-4 sidenav">
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
        </div>

        <div class="col-sm-4 sidenav">
            <p>Copyright © 2016. All Rights Reserved. Powered by Alexander Intriago.</p>
        </div>

        <div class="col-sm-4 sidenav">
            <p><a href="#"><i  id="face" class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></p>
            <p><a href="#"><i  id="twet" class="fa fa-twitter" aria-hidden="true"></i> Twetter</a></p>
            <p><a href="#"><i  id="inst" class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></p>
        </div>

</footer>

</body>
</html>