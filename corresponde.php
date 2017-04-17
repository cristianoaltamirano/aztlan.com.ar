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
          <img class="img-responsive" src="assets/images/articulos/psico_jung.jpg" alt="">
        </div>
      </section>
      
      <!-- Page Content -->
      <div class="container-fluid cont-section" style="padding-top:20px" id="articulo">
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-9">
            
            <!-- titulo -->
            <div class="page-header">
              <h2>Una Nueva Educación para una Nueva Era<h2>
            </div>
            <p class="lead">Para que los hombres sean libres y justos consigo mismos y con los demás, puesto que las distinciones sociales son falsas y están basadas en la injusticia y en la ignorancia:</p>
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
            <hr>
            <p><strong>CORRESPONDE:</strong> Que la transmisión de la lámpara de la cultura y formación del individuo no signifique solo conservación, sino acrecentamiento progresivo de su llama en la vida del espíritu y especialmente la cultura, manteniéndola activa y desarrollándola continuamente, ya que de lo contrario sólo vegetamos y nos dominan los prejuicios que envenenan nuestra existencia. Hay que mantener vividos los años y las conquistas de las generaciones anteriores, porque los que viven muertos sus propios años no progresan activamente, dejando perder y morir también la herencia que reciben de quienes tratan de guiarlos. La teoría de la educación que son los verdaderos valores de los cuales el mundo actual carece desgraciadamente, pues se ha enfrentado a las superfluas costumbres de esta sociedad, como a la falta de maduración de sus componentes, sumadas a las acciones del medio que son meramente utilitarias. Esta misma dificultad nos debe enseñar lo que debemos hacer.
            </p>
            <p><strong>CORRESPONDE:</strong> Que nuestro comportamiento sea HUMANO, no animal. Debemos adquirir conocimiento para aplicarlo y mejorar en la vida tomando actitudes más constructivas para todos. ¿De qué sirve que la razón sea el timón en el océano de la vida, si el prejuicio, las falsas ideas, son el piloto de la nave?
            </p>
            <p><strong>CORRESPONDE:</strong> Sabe que el conocimiento es una común-unión con lo real, es una confrontación entre el universo y yo, él se mira en mí como yo me miro en él, y cuando esas dos miradas se cruzan surgue una luz que el menor movimiento de amor propio basta para aniquilar y oscurecer.
            </p>
            <p><strong>CORRESPONDE:</strong> Que al pensamiento y sentimiento humano se le planteen nuevas tareas referidas a su evolución. La vida exige que el hombre que quiera conocerse a sí mismo se sobreponga a la tensión de la soledad, a la agustia producida por una vida sin sentido trascendente, a fin de comprender la nadidad y comenzar entonces a buscar respuestas reales que le den validez y sentido a la existencia. El medio de llegar a la meta es el conocimiento de sí mismo, ya que sin éste todo paso es errado. Si logramos penetrar en la intimidad de la vida espiritual, veremos que el carácter especial de ella es la coexistencia, en cualquier instante que se considere, de un pasado viviente y un futuro que se anticipa. Enseñar no es informar, sino inducir a la vez, es revelar, orientar, es hacer apto al discípulo, apto para observar, pensar, determinar, para obrar por si mismo, para amar.
            </p>
            <p><strong>CORRESPONDE:</strong> Creer que lo que más nos hace falta en la vida es alguien que por medio de la comprensión nos ayude a hacer aquello que por propia evolución somos capaces, porque éste es el verdadero desarrollo del <strong>SER HUMANO.</strong></p>
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox">
          </div>
          <hr>
          <?php include('includes/art_comment.php');?>
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