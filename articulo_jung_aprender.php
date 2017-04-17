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
          <img class="img-responsive" src="assets/images/articulos/Aprender-la-psicologia-de-Jung.jpg" alt="">
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
              <h2 class="articulo_text_header">Aprender la Psicología de Jung</h2>
            </div>
            <!-- Bajada -->
            <p class="lead">Al hablar de la Mente y la actividad mental, Jung prefirió emplear los términos Psiquis y Psíquico, en vez de mente y mental, porque estos últimos se asocian primordialmente al consciente, en tanto que las palabras Psique y Psíquico las utiliza para incluir tanto lo consciente como el Inconsciente. Psique proviene del griego, y es sinónimo de Alma; dice Jung, entonces, que la psicología en tanto debe ser el estudio o conocimiento (logos) del Alma humana (psique).</p>
            
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
            <hr>
            <p> Si bien nuestro Ego cree conocerse a sí mismo y tiende a negar el Inconsciente como una entidad autónoma, las conductas cotidianas tienden a contradecir esta opinión del Ego. Generalmente, no se reconocen en si mismos la importancia de los fenómenos inconscientes, ya que éstos no tienen relación de continuidad con el Ego o Consciencia de Vigilia. Como dice Jung: si los fenómenos inconscientes llegan a hacerse presentes en nuestra conducta del Ego, como podría ser, por ejemplo, un estallido emocional fuera de toda proporción, nadie que no esté al tanto de la naturaleza de la motivación inconsciente se los podría explicar. En estos casos solemos decir: "No sé lo que me ocurrió" o bien "Estaba fuera de sí" o "Estaba irreconocible". Algo muy importante en la Psicología de Jung: Las manifestaciones inconscientes no se limitan a los casos patológicos; las personas "normales" (es decir, quienes no padecen patologías psíquicas) están siempre obrando en base a motivos de los cuales no se dan cuenta en absoluto.</p>
            <p><br>
              El aspecto inconsciente de la Psique es diferente del consciente, pero lo compensa. Es decir el Inconsciente posee una función compensatoria; ejemplo simple de ello es a través de los sueños, alguien que estando enfermo se sueña totalmente sano y rebosante de energía.
              En la Psicología de Jung lo inconsciente no es un subproducto del consciente (por contraposición a Freud, quien consideraba al subconsciente  como un depósito donde se oculta todo lo reprimido por el Ego). Para Jung la mente consciente o Ego "tiene por Base y es el Resultado de una psique Inconsciente anterior al consciente y funciona junto con o a pesar del Ego". Es decir en la Psicología de Jung lo inconsciente antecede y preforma al consciente. Es por ello que es nuestro deber moral conocer y explorar nuestro Inconsciente a través de una "segunda educación", que nos permitirá no sólo conocernos a nosotros mismos sino también lograr un aumento de la consciencia y un mayor nivel de integridad en nuestra personalidad total (que aún se encuentra escindida entre lo consciente y lo inconsciente). Jung llama a esta posibilidad de evolución psíquica, el proceso de individuación.
            Por último, Jung insiste en la realidad de la Psique, afirma que no es menos real nuestro mundo interior que lo físico; y que así como el cuerpo físico está sometido a una estructura y leyes, también la psique, nuestro mundo interior, responde a una estructura determinada y todo lo que sucede en nuestro interior posee mucho valor y es digno de ser estudiado y comprendido (tanto o más que la realidad del mundo circundante exterior).</p>
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