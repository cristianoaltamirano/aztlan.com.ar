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
          <img class="img-responsive" src="assets/images/articulos/jung_arquetipos.jpg" alt="">
        </div>
      </section>
      
      <div class="redes"></div>
      <!-- Page Content -->
      <div class="container-fluid cont-section" style="padding-top:20px" id="articulo">
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-9">
            
            <!-- titulo -->
            <div class="page-header articulo_header">
              <h2 class="articulo_text_header">Los Arquetipos de Jung</h2>
            </div>
            <!-- Bajada -->
            <p class="lead">Jung utilizó el término "Arquetípica" para describir todas las realidades psicológicas de carácter biológico y psicobiológico. </p>
            
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
            <hr>
            <p>La capacidad de un recién nacido para mamar es arquetípica, como también lo es sonreír, fruncir el ceño, llorar y todas aquellas acciones repetidas en referencia a los comportamientos y gestos que nos hacen seres humanos. Algunas "psicologías extrovertidas unilaterales" argumentan que estas cualidades se programan desde el exterior ya que creen que, al nacer, la psique humana es una "tabula rasa". Jung afirmó que existe un potencial arquetípico en el niño sin el cual nunca podría ser "programado". Innata en la mayoría de los animales, esta capa o predisposición arquetípica se expresa desde el primer momento de la vida, como por ejemplo en la necesidad arquetípica de relacionarse con una figura materna. Esta necesidad urgente de tener una madre es un ejemplo, muy simple y de introducción de hecho, de lo que Jung llama: arquetipos. Rituales de interacción social, los procesos de apareamiento, las maneras de percibir y evaluar lo que se percibe, entre otros, constituyen una serie de arquetipos de comportamientos eternamente repetidos entre los seres humanos.</p>
            <br>
            <p> El concepto de inconsciente colectivo (este inconsciente, donde los arquetipos residen, capa atemporal psíquica compartida por toda la humanidad) ha "irritado" a algunas personas, probablemente la idea de que hay un inconsciente colectivo parece reducir la posibilidad de un Ego único e independiente. En realidad, al igual que tenemos características personales, que nos hacen únicos, también tenemos que experimentar ciertas experiencias o lecciones que son arquetípicas. Protágoras, filósofo griego, abandonó esta idea por escrito hace muchos siglos, cuando declaró que: "El hombre es la medida de todas las cosas". Esto significa que no pasará nada al hombre que no es inherente a su naturaleza humana. Es decir, por analogía, lo que ocurre con el gorrión será lo que le sucede a su especie y lo que sucede a los leones, a la especie del león. Todo lo referente a nosotros es tan único como nuestra huella digital o el ADN, aunque al mismo tiempo también somos seres meramente humanos. Al igual que con las paradojas se trata de una nueva idea al principio, aunque, como ya hemos mencionado, existió hace muchos siglos en la Filosofía.</p>
            <p>Si miramos a nuestro alrededor una habitación iluminada por bombillas y lámparas, vamos a deducir fácilmente que la energía o la electricidad es la misma en cada uno de ellos. Esta imagen ofrece una idea de la naturaleza del inconsciente colectivo. Cada uno de nosotros es un foco único, separado y distinto de la luz, con un voltaje determinado y marca, pero el principio vital en cada uno de nosotros es el mismo: "energía eléctrica". Esta idea puede ir en contra nuestra (egocentrismo), pero si lo examinamos en profundidad y con intensidad vamos a ver que es verdad. Somos un ser personal e impersonal al mismo tiempo. Los principales arquetipos que se expresan en nosotros en nuestros tiempos, tal como los describe Jung son: la Persona (o la "máscara"); Ánima y Ánimus (arquetipos sexuales); la Sombra (lo que está oculto); el Ser como sinónimo de la Conciencia real u Objetiva (escondida dentro de nosotros hasta que lo hacemos consciente). Es nuestra opción de decidir hacer los Arquetipos conscientes que nos animan a lograr una vida más consciente e integrada, o continuar en la oscuridad de la ignorancia.  </p>
            
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
            <hr>
            <?php include('includes/art_comment.php');?>
          </div>
          <div class="col-sm-3">
            
            <?php include('includes/rside.php');?>
            <!-- <img class="img-responsive" src="assets/images/articulos/aside.jpg" alt=""/>  -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <!-- articles -->
      <?php include('includes/jung_bottom.php');?>
      <?php include('includes/footer.php');?>
    </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
  </body>
</html>