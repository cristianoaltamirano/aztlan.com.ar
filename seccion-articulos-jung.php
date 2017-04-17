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
              <h2 class="articulo_text_header">Carl Gustav Jung</h2>
            </div>
            <!-- Articulo -->
            <article>
              <a href="articulo_jung_inc_colectivo.php">
                <div class="col-sm-3">
                  <img class="img-responsive" src="assets/images/home/jung_inc_colectivo_small.jpg" alt="">
                </div>
                <div class="col-sm-9">
                  <h2>Psicología del Inconsciente Colectivo y Arquetipos</h2>
                  <p>Carl G. Jung es considerado actualmente el padre de la Psicología Transpersonal. Sus ideas y conceptos renovaron y vertieron luz, no sólo sobre la Psicología, sino sobre muchas otras ciencias...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            <!-- Articulo -->
            <article>
              <a href="articulo_jung_tipos.php">
                <div class="col-sm-3">
                  <img class="img-responsive" src="assets/images/home/jung_tipos_small.jpg" alt="">
                </div>
                <div class="col-sm-9">
                  <h2>Tipos Psicol&oacute;gicos en la Psicolog&iacute;a de Carl G. Jung</h2>
                  <p>Jung considera que hay 4 funciones que utilizamos para nuestra orientaci&oacute;n en el mundo (y tambi&eacute;n para orientarnos en nuestro mundo interior): sensaci&oacute;n, que es la percepci&oacute;n por medio de los sentidos...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            <!-- Articulo -->
            <article>
              <a href="articulo_jung_aprender.php">
                <div class="col-sm-3"><img class="img-responsive" src="assets/images/home/Aprender-la-psicologia-small.jpg" alt=""></div>
                <div class="col-sm-9">
                  <h2>Aprender la Psicología de Jung</h2>
                  <p>Al hablar de la Mente y la actividad mental, Jung ha preferido emplear los términos Psiquis y Psíquico, en vez de mente y mental, porque éstos últimos se asocian primordialmente al consciente, en tanto que las palabras Psique y Psíquico las utiliza para...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            <!-- Articulo -->
            <article>
              <a href="articulo_jung_arquetipos.php">
                <div class="col-sm-3">
                  <img class="img-responsive" src="assets/images/home/Los-Arquetipos-de-Jung.jpg" alt="">
                </div>
                <div class="col-sm-9">
                  <h2>Los Arquetipos de Jung</h2>
                  <p>Jung utilizó el término "Arquetípica" para describir todas las realidades psicológicas de carácter biológico y psicobiológico. La capacidad de un recién nacido a chupar es arquetípica, como las acciones de...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            
            <!-- Articulo -->
            <article>
              <a href="articulo_jung_definiciones.php">
                <div class="col-sm-3"><img class="img-responsive" src="assets/images/home/jung_definiciones_small.jpg" alt=""></div>
                <div class="col-sm-9">
                  <h2>Algunas definiciones</h2>
                  <p>Estas son algunas definiciones que nos legara el gran Psicólogo y Pensador suizo, Carl G. Jung, de quien ya se han editado en español sus obras completas, que constan de 20 volúmenes. NEUROSIS: Dice Jung en “Psicología y Religión”...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            <!-- Articulo -->
            <article>
              <a href="articulo_jung_quien.php">
                <div class="col-sm-3"><img class="img-responsive" src="assets/images/home/jung_quien_small.jpg" alt=""></div>
                <div class="col-sm-9">
                  <h2>¿Quién fué Carl Gustav Jung?</h2>
                  <p>Carl G. Jung es considerado actualmente el padre de la Psicología Transpersonal. Sus ideas y conceptos renovaron y vertieron luz, no sólo sobre la Psicología, sino sobre muchas otras ciencias...</p>
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