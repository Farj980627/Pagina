<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../css/mycss.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../js/myjs.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>

<div class="backgroundtop-contact">
<!--    LOGO PRINCIPAL -->
        <a href="index.php" class="brand-logo">  <img class="responsive-img" src="../img/logo.png"></a>
<!--    LOGO PRINCIPAL -->

<!--    BARRA DE NAVEGACION -->
        <nav class="margin-nav">
        <div class="nav-wrapper pink darken-2">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="menu-element"><a href="../index.php">Inicio</a></li>
            <li class= "spacer2"></li>
            <li class="menu-element"><a href="Contact.php">Contacto</a></li>
            <li class= "spacer2"></li>
            <li class="menu-element"><a href="About.html">Nosotros</a></li>
            <li class= "spacer1"></li>
          </ul>
        </div>
        </nav>
<!--    BARRA DE NAVEGACION -->


<!--    FORM -->
<div class="formulario">
    <div class="square-sub2">Ingresa tus datos y te contactaremos.</div>
        <div class="row">
            <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Nombre" id="nombre" type="text" class="validate">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col s6">
                    <input id="email" type="text" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="input-field col s12">
                <textarea id="problema" class="materialize-textarea"></textarea>
                <label for="problema">Problema</label>
            </div>
            </form>
        </div>
        <div class="send_button"><a class="waves-effect waves-light btn-large" ><i class="material-icons right">send</i>Enviar</a></div>
</div>
<!--    FORM -->


<!-- FOOTER -->
        <footer class="page-footer">
          <div class="container">
            <div class="row">
               <div class="col l6 s12">
                  <h5 class="white-text">Informacion adicional.</h5>
                  <p class="grey-text text-lighten-4">Voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                 <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Redes sociales</h5>
                     <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Linkedin</a></li>
                     </ul>
                 </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
                © 2017 Advocatorum M&M
              </div>
            </div>
        </footer>
<!-- FOOTER -->



    </body>
  </html>
