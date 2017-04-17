<!DOCTYPE html>
<html lang="">
  <head>
    <?php include('includes/head.php'); ?>
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
      <section>
        <div style="height: auto;background-color: #ebebeb;max-width: 1600px;">
          <img class="img-responsive" src="assets/images/articulos/quienes-somos-psico.jpg" alt="">
        </div>
      </section>
      
      <!-- Page Content -->
      <div class="container-fluid cont-section" style="padding-top:20px" id="articulo">
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-9">
            <!-- titulo -->
            <div class="page-header articulo_header">
              <h2 class="articulo_text_header">¿Quiénes Somos?<h2>
            </div>
            <!-- Bajada -->
            <img style="float: left; margin-right: 20px; height: 197px; width: 139px;" src="assets/images/articulos/quienes-somos-psico-sede.jpg" alt=""/>
            <p class="lead">Nuestro Centro Cultural </p>
            <p>El Centro Cultural de Psicología, Filosofía y Humanidades Aztlan, es una Asociación Civil inscripta en la I.G.J., bajo el Nº 748 fue fundada por el Prof. León Azulay, filósofo, quien se ha dedicado a la enseñanza desde hace más de cincuenta años. Frente a la crisis y decadencia de las antiguas instituciones educativas, ha desarrollado el novedoso Método Aztlan®, el cual responde a un nuevo y moderno paradigma educativo y cultural.</p>
            <p class="lead">¿Qué significa Aztlan?</p>
            <p>Aztlan es un nombre Tolteca que en la mitología antigua era la Ciudad Ideal de la Cultura, la Luz y el Conocimiento. Con el Método Aztlan® el Prof. Azulay ha logrado un método de enseñanza que combina e integra los sistemas de Psicología Holísticos más avanzados de nuestra época: La Psicología del Inconsciente Colectivo de Carl Gustav Jung y el Cuarto Camino de Gurdjieff y Ouspensky. Además agrega la enseñanza del Budismo y la Filosofía tanto de Oriente como de Occidente. Asimismo hace más de 30 años que se dedica profesionalmente a la investigación astrológica, siendo uno de los precursores de la Astrología Humanista en la Argentina. Forman parte también del Centro Cultural los Profesores Nicolás Nardi y la Prof. Florencia Santoni, entre otros profesionales.</p>
            <p class="lead">Objetivos</p>
            <p>Se buscan propósitos que propician el desarrollo y el mayor bienestar del individuo y del grupo o comunidad al mismo tiempo. La formación y capacitación incluyen tanto el aspecto teórico, como así técnicas para el bienestar interior.</p>
            <p class="lead">Actividades</p>
            <p>Algunas de las actividades que desarrolla el Centro Cultural Aztlan son la Formación de 2 años de Psicología Holística para la vida cotidiana, Talleres Cortos y Conferencias Gratuitas sobre Psicología Holística, Jung, Cuarto Camino, Budismo, Hinduismo y Física Cuántica destinados a todos los que desean ampliar su mirada de sí mismos y del mundo.
              Desarrolla también Ciclos de películas en el Cine Club Aztlan donde se proyectan de películas de alto valor cultural e histórico, y películas del circuito independiente o alternativo, así como también documentales inéditos en la Argentina y Latinoamérica.
            Además el Centro Cultural Aztlan edita la Revista Aztlan, una revista de distribución gratuita, que puede adquirirse en formato impreso o digital.</p>
            <p class="lead">Conocé nuestra Sede</p>
            <iframe width="852" height="479" src="https://www.youtube.com/embed/NRl3jEgLpX4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-sm-3">
            
            <?php include('includes/rside.php');?>
            <!-- <img class="img-responsive" src="assets/images/articulos/aside.jpg" alt=""/>  -->
          </div>
        </div><br>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <?php include('includes/footer.php');?>
    </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
  </body>
</html>