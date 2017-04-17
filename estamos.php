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
            <div class="page-header articulo_header">
              <h2 class="articulo_text_header">¿Dónde estamos?</h2>
            </div>
            <p>El Centro Cultural de Psicología, Filosofía y Humanidades Aztlan, está ubicado en el barrio de Almagro, Ciudad Autónoma de Buenos Aires, Argentina. Para comunicarte con nosotros o solicitar información de las formaciones en Psicología Transpersonal, Jung y Cuarto Camino de Gurdjieff, podés hacerlo de Lunes a Viernes de 10 a 18hs, llamando al (011) 2090-8805 ó envianos tu e-mail a info@aztlan.com.ar</p>
            
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