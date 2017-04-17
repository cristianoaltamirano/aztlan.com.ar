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
          <img class="img-responsive" src="assets/images/articulos/jung_definiciones.jpg" alt="">
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
              <h2 class="articulo_text_header">Algunas definiciones</h2>
            </div>
            <!-- Bajada -->
            <p class="lead">Estas son algunas definiciones que nos legara el gran Psicólogo y Pensador suizo, Carl G. Jung, de quien ya se han editado en español sus obras completas, que constan de 20 volúmenes: </p>
            
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
            <hr>
            <p><strong>NEUROSIS</strong><br>
              Dice Jung en “Psicología y Religión”: “Una psiconeurosis debe considerarse, en última instancia, como el sufrimiento de un alma que no ha descubierto su significado. Casi toda la creatividad en el reino del espíritu, así como cada adelanto psíquico del hombre, surge del sufrimiento del alma, y la causa del sufrimiento es el estancamiento espiritual o la esterilidad psíquica.”
            En la visión de Jung la infelicidad de la neurosis constituye la oportunidad dorada para alcanzar una conciencia más elevada y significativa. Es como si el sufrimiento tuviera la finalidad de propulsarnos hacia delante, hacia nuevos estados de ser. Los símbolos arquetípicos, entonces, son unidades de energía que portan significados capaces de renovar nuestra vida consciente, e incluso su uso consciente puede servir para ayudar a liberar al individuo de los conflictos.</p>
            <p><strong>EL DESTINO</strong><br>
              “La norma psicológica dice que cuando no se toma conciencia de una situación interna, sucede fuera, como destino.  Es decir, cuando el individuo no toma conciencia de  sus contradicciones interiores, el mundo forzosamente deberá representar el conflicto.” C.G. Jung en “Aion”.
            Por lo tanto, parece seguro decir que un compromiso de desarrollo y conocimiento personales no sólo ofrecen la promesa de ayudar al individuo a que en el futuro sea un alma más integra, armónica, sino también que tal paso empieza a menudo a aliviar mucho sufrimiento en el presente, una vez que la confusión y el desánimo iniciales fueran vencidos. </p>
            <p><strong>LOS MITOS</strong><br>
              ¨El mito sirve de fuerza vitalizadora en toda cultura, mostrando la relación del hombre con una realidad más vasta y universal”, afirma Jung. O sea, que siempre los mitos han sido un gran acervo de conocimientos sobre el ser humano que al describir los procesos arquetípicos por los que todos los seres humanos pasamos, nos sirven de guía para nuestra evolución personal. Los Dioses Mitológicos en la Grecia y Roma antiguas, representan fuerzas de la Naturaleza y además estados y caracteres psicológicos.
            Cada dios representaba una fuerza y principios vivos del universo que habitan en nuestra psique (es decir, Arquetipos). </p>
            <p><strong>LA CONSCIENCIA DEL EGO</strong><br>
            En “Psicología y Alquimia”, Jung describe la vulnerabilidad del Ego frente a la autonomía del Inconsciente Personal y Colectivo: “La conciencia individual está rodeada por el mar amenazador del inconsciente. Tan solo en apariencia está segura y confiada, pero en realidad es una cosa frágil que descansa sobre bases vacilantes. Basta a veces una emoción fuerte para perturbar sensiblemente el equilibrio de la conciencia. Bien lo expresan las conocidas frases: “Se pierden los estribos. Parecía otro”. “Es para salirse de las casillas” “Hay cosas que lo vuelven loco a uno”, y situaciones en las que se dice:  “Ya no sé qué hacer” todas estas frases corrientes demuestran con qué facilidad una emoción conmueve la conciencia del ego.”   </p>
            <p><strong>EL CAMBIO EMPIEZA EN EL INDIVIDUO</strong><br>
            Frente a la crisis, la mentalidad extrovertida occidental busca cambiar al otro o cambiar la sociedad. Sin embargo no se detiene a pensar que para cambiar a la sociedad hay que cambiar a los individuos que la componen. Dice Jung al respecto en el libro “Lo Inconsciente”: “Sólo el cambio en la actitud del individuo inicia el cambio en la psicología de la nación. Los grandes problemas de la humanidad nunca se resolvieron por leyes generales, sino únicamente por renovación de la actitud del individuo. Si ha habido un tiempo en que la meditación interior fuera de absoluta necesidad y de extrema conveniencia es, sin duda, en nuestra época actual, preñada de catástrofes. Ahora bien, todo aquel que medite en su fuero interno tocará en las fronteras de lo Inconsciente, que es precisamente donde está lo que ante todo hace falta saber. La meditación del individuo sobre sí mismo, la conversión del individuo hacia su propio ser, hacia su destino individual y social, es el principio para la curación de la ceguera que padece. El interés por el problema del alma humana es un síntoma de ésta conversión instintiva hacia adentro.” </p>
            
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