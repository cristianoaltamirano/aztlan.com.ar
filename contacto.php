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
          <div class="col-sm-9" style="padding-right: 150px">
            <!-- titulo -->
            <div class="page-header articulo_header">
              <h2 class="articulo_text_header page-header">
              <h2>Contacto<h2>
            </div>
            <div class="contacto">
              <div>
                <form id="contact" action="contact.php" method="post">
                  <h3>Completá tus datos</h3>
                  <fieldset>
                    <input name="nombre" placeholder="Nombre y Apellido" type="text" tabindex="1" required autofocus>
                  </fieldset>
                  <fieldset>
                    <input name="email" placeholder="Email" type="email" tabindex="2" required>
                  </fieldset>
                  <fieldset>
                    <input name="cel" placeholder="Celular" type="tel" tabindex="3" required>
                  </fieldset>
                  <fieldset>
                    <input name="dni" placeholder="DNI" type="tel" tabindex="4" required>
                  </fieldset>
                  <fieldset>
                    <input name="facebook" placeholder="Facebook" type="text" tabindex="5" required>
                  </fieldset>
                  <h3>¿Qué material te interesa?</h3>
                  <div class="row">
                    <div class="col-sm-6">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Psicología" name="checkbox[]">
                        Psicología
                      </label>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Filosofía Occidental" name="checkbox[]">
                        Filosofía Occidental
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Budismo" name="checkbox[]">
                        Budismo
                      </label>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Filosofía de la India" name="checkbox[]">
                        Filosofía de la India
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Ciencias Políticas" name="checkbox[]">
                        Ciencias Políticas
                      </label>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Historia Oculta" name="checkbox[]">
                        Historia Oculta
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Mecánica Cuántica" name="checkbox[]">
                        Mecánica Cuántica
                      </label>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Antropología" name="checkbox[]">
                        Antropología
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Antropología" name="checkbox[]">
                        Arqueología
                      </label>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Ecología" name="checkbox[]">
                        Ecología
                      </label>
                    </div>
                  </div>
                  <fieldset>
                    <textarea name="comentario" placeholder="Escribe tu mensaje..." tabindex="6" required></textarea>
                  </fieldset>
                  <p style="color: red; margin-bottom: 0"><?php if(isset($error_message)){echo $error_message;} ?></p>
                  <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando">Enviar</button>
                  </fieldset>
                  
                </form>
              </div>
              
            </div>
          </div>
          <!-- /coluna derecha -->
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
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
  </body>
</html>