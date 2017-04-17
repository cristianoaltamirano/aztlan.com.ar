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
              <h2 class="articulo_text_header">Budismo</h2>
            </div>
            <!-- Articulo -->
            <article>
              <a href="articulo_budismo.php">
                <div class="col-sm-3">
                  <img class="img-responsive" src="assets/images/home/budismo-su-historia-y-sus-bases.jpg" alt="">
                </div>
                <div class="col-sm-9">
                  <h2>Budismo: su historia y sus bases</h2>
                  <p>El Budismo nace en el siglo V antes de nuestra Era (500 años antes del nacimiento de Cristo) con Siddharta Gautama el Budha. Dentro del Budismo podemos encontrar dos grandes corrientes. La Hinayana...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            <!-- Articulo -->
            <article>
              <a href="articulo_budismo_zen.php">
                <div class="col-sm-3">
                  <img class="img-responsive" src="assets/images/home/el-budismo-zen-y-la-psicologia-del-inconsciente-colectivo-small.jpg" alt="">
                </div>
                <div class="col-sm-9">
                  <h2>El Budismo Zen y la Psicología del Inconsciente colectivo</h2>
                  <p>Vamos a dar una aproximación a la psicología del budismo zen y para ello vamos a utilizar las principales ideas del psicólogo y maestro Carl G. Jung porque él es una autoridad en el tema. Uno de los exponentes más importantes del Zen en Occidente fue...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            <!-- Articulo -->
            <article>
              <a href="articulo_budismo_dalai_lama.php">
                <div class="col-sm-3"><img class="img-responsive" src="assets/images/home/DALAI-LAMA-CHICA.jpg" alt=""></div>
                <div class="col-sm-9">
                  <h2>XIV Dalai Lama - Budismo del Tibet</h2>
                  <p>El máximo líder espiritual del Budismo, Su Santidad el Dalai Lama, visitó nuestro país por cuarta vez durante el mes de Septiembre del 2011. Durante su visita, realizó dos encuentros ...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            <!-- Articulo -->
            <article>
              <a href="articulo_budismo_hinduismo.php">
                <div class="col-sm-3">
                  <img class="img-responsive" src="assets/images/home/MAS ARTICULOS DE BUDISMO!---CHICA.jpg" alt="">
                </div>
                <div class="col-sm-9">
                  <h2>Hinduismo - Psicología Yoga</h2>
                  <p>Para nosotros, los occidentales, es difícil definir el Yoga ya que lo que conocemos son los ejercicios físicos, he ignoramos sus bases y su filosofía religiosa que data de miles de años atrás. Puede decirse que...</p>
                  Seguir leyendo
                </div>
              </a>
            </article>
            
            <!-- Articulo -->
            <article>
              <a href="articulo_budismo_felicidad.php">
                <div class="col-sm-3">
                <img class="img-responsive" src="assets/images/home/LA-FELICIDAD-SEGUN-EL-BUDISMO-----CHICA.jpg" alt=""></div>
                <div class="col-sm-9">
                  <h2>¿Es posible alcanzar una felicidad y armonía absolutas?</h2>
                  <p>¿Es necesario el sufrimiento para compensar la felicidad?
                  ¿Es posible alcanzar una felicidad y armonía absolutas? Frente a éstas pregunta el Dalai Lama contestó a un discípulo del budismo...</p>
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