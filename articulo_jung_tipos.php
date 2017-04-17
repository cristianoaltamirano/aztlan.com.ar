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
          <img class="img-responsive" src="assets/images/articulos/jung_tipos.jpg" alt="">
        </div>
      </section>
      
      <!-- <div class="redes"></div> -->
      <!-- Page Content -->
      <div class="container-fluid cont-section" style="padding-top:20px" id="articulo">
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-9">
            
            <!-- titulo -->
            <div class="page-header articulo_header">
              <h2 class="articulo_text_header">Tipos Psicológicos en la Psicología de Jung</h2>
            </div>
            <!-- Bajada -->
            <p class="lead">Jung considera que hay 4 funciones que utilizamos para nuestra orientación en el mundo (y también para orientarnos en nuestro mundo interior): sensación, que es la percepción por medio de los sentidos; el pensamiento que nos procura significado y comprensión; el sentimiento, que mide y valoriza; y la intuición,  que nos habla de posibilidades futuras y nos informa de la atmósfera que rodea a toda experiencia.</p>
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
            <hr>
            <p>Así como el león ataca a su presa con la garra delantera, y no con la cola como lo hace el cocodrilo, así nuestras reacciones habituales se caracterizan por la aplicación de nuestra función más cierta y eficiente; es una expresión de nuestra fuerza. Sin embargo, esto no impide que a veces reaccionemos de un modo que demuestre nuestra debilidad especial. El predominio de una función sobre otra, nos lleva a construir o a buscar ciertas situaciones y a evitar otras.  Cuando una manera de reaccionar se hace habitual, entonces se puede hablar de un Tipo.</p>
            </br>
            <img style="width: 300px;float:left;margin-right: 20px;" class="img-responsive" src="assets/images/articulos/tipos_psico_sub_jung.jpg" alt=""/> <p>Cada uno de los 4 tipos se puede combinar con el modo extravertido o introvertido. Ej. El tipo Intelectual extravertido basa sus juicios en hechos del mundo externo (podría ser el sociólogo o periodista, por ej.). El tipo pensante introvertido, analiza las causas, más allá de las manifestaciones exteriores (podrías ser, el filósofo, por ej.)</p>
            
            <p>Cuando la vida de un individuo la gobierna  principalmente el pensamiento, y cuando por lo general sus acciones son resultado de consideraciones intelectuales, entonces se le llama Tipo Pensador o Intelectual. Gusta de la lógica, o el orden. Su vida se basa en “principios” o “teorías”. Siente disgusto, desconfianza y temor a lo irracional; tiende a reprimir emociones y sentimientos.</p>
            <p>El sentimiento es una función racional; es una función que discrimina según el Valor o una escala de valores. Ahí donde no hay sentimiento o hay muy poco,  (por ej. En el extremo del Tipo intelectual extravertido donde el sentimiento es la función más subdesarrollada)  hay una tremenda acumulación de hechos, algunos de algún valor mezclados con otros completamente carentes de él.</p>
            <p>Por ejemplo, cuando el Sentimiento tiene prioridad por sobre las otras funciones, se habla del tipo de Sentimiento. Y cuando además es extravertido, su sentimiento estará bajo el gobierno del ambiente y se adaptará a él (tiene que ver con las relaciones sociales, el anfitrión o anfitriona por excelencia, por ej.). Puede llegar a ser superficial en casos de funcionamiento unilateral. En el introvertido puede ser una persona más religiosa y devocional (valores en el mundo interno).</p>
            <p>Este tema se desarrolla en profundidad en la Formación y Capacitación en Psicología Transpersonal que se dicta en el Centro Cultural de Psicología, Filosofía y Humanidades Aztlan.</p>
            
            
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox">
            
          </div>
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
  <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
</body>
</html>