<!DOCTYPE html>
<html lang="">
  <head>
    <?php include('includes/head.php'); ?>
    <style type="text/css">
    article p, article h2, article li {color: #333}
    h2:hover {color: #337ab7}
    </style>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="container" id="contenedor">
      
      <?php include('includes/navbar.php');?>
      <!-- Page Content -->
      <div class="container-fluid cont-section" style="padding-top:20px" id="articulo">
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-9">
            <!-- titulo -->
            <div class="page-header articulo_header">
              <h2 class="articulo_text_header">Otros temas</h2>
            </div>
            <!-- Articulo -->
            <article>
              <a href="articulo_otros_filosofia_griega.php">
                <div class="col-sm-3">
                  <img class="img-responsive" src="assets/images/home/img-est.jpg" alt="">
                </div>
                <div class="col-sm-9">
                  <h2>Filosofía griega</h2>
                  <p>Conócete a ti mismo y conocerás el universo. La cuna de la cultura Occidental es la Civilización Griega. En Grecia Antigua hallamos el origen de la física, astronomía, arquitectura, las ciencias políticas, la metafísica y por supuesto la filosofía...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            <article>
              <a href="descubriendo-nuevas-realidades.php">
                <div class="col-sm-3">
                  <img class="img-responsive" src="assets/images/home/descubriendo-nuevas-realidades-chica.jpg" alt="">
                </div>
                <div class="col-sm-9">
                  <h2>Descubriendo nuevas realidades</h2>
                  <p>La física clásica del gran Isaac Newton se fundamenta en observaciones relativas a objetos cotidianos...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            <!-- Articulo -->
            <article>
              <a href="el-mito-de-la-caverna-de-platon.php">
                <div class="col-sm-3"><img class="img-responsive" src="assets/images/home/el-mito-de-la-caverna-de-platon-chica.jpg" alt=""></div>
                <div class="col-sm-9">
                  <h2>El Mito de la Caverna de Platón</h2>
                  <p>El Mito de la Caverna de Platón, lo encontramos en el capítulo séptimo de su libro La República....</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            <!-- Articulo -->
            <article>
              <a href="reprogramar-nuestra-mente-es-posible.php">
                <div class="col-sm-3">
                  <img class="img-responsive" src="assets/images/home/reprogramar-nuestra-mente-es-posible-chica.jpg" alt="">
                </div>
                <div class="col-sm-9">
                  <h2>Reprogramar nuestra Mente es posible</h2>
                  <p>¿Por qué siempre emprendemos la misma clase de relaciones, o discutimos por las mismas cosas, o hacemos las cosas de una misma determinada manera...?</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
          </div>
          <div class="col-sm-3">
            <?php include('includes/rside.php');?>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <?php include('includes/footer.php');?>
    </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
  </body>
</html>