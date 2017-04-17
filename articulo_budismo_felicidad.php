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
          <img class="img-responsive" src="assets/images/articulos/LA-FELICIDAD-SEGUN-EL-BUDISMO.jpg" alt="">
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
              <h2 class="articulo_text_header">¿Es posible alcanzar una felicidad y armonía absolutas?</h2>
            </div>
            
            <!-- Bajada -->
            <p class="lead">¿Es necesario el sufrimiento para compensar la felicidad?<br>
            ¿Es posible alcanzar una felicidad y armonía absolutas?</p>
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox">
            
          </div>
          <div style="border-top:1px #E0DED9 solid; margin:40px 0"></div>
          
          <p>Frente a éstas pregunta el Dalai Lama contestó a un discípulo del budismo: "Cuando hablamos de felicidad y de sufrimiento en el budismo no nos
            estamos refiriendo puramente a una felicidad en el nivel de los sentimientos o de las sensaciones. Desde el punto de vista budista, la experiencia obvia
            del dolor es una forma de sufrimiento identificable. Pero también dice el budismo que ni siquiera es auténtica felicidad lo que clasificamos como
            sensación placentera, como felicidad. Es igualmente una forma de sufrimiento porque en ella se encuentra la semilla para la insatisfacción. El tipo
            de felicidad de la que habla el budismo en la enseñanza de las cuatro verdades nobles es la cesación total, no sólo del dolor y del sufrimiento, sino
          también de las emociones fluctuantes, etc. Es un estado que se encuentra más allá de sensaciones y sentimientos."</p>
          <hr>
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
    <hr>
  </div>
  <!-- /.container-fluid -->
  <?php include('includes/budismo_bottom.php');?>
  <?php include('includes/footer.php');?>
</div>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
</body>
</html>