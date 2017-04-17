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
          <img class="img-responsive" src="assets/images/articulos/jung_quien.jpg" alt="">
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
              <h2 class="articulo_text_header">¿Quién fue Carl Gustav Jung?</h2>
            </div>
            <!-- Bajada -->
            <p class="lead">Carl G. Jung es considerado actualmente el padre de la Psicología Transpersonal. Sus ideas y conceptos renovaron y vertieron luz, no sólo sobre la Psicología, sino sobre muchas otras ciencias. </p>
            
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
            <hr>
            <p>Carl Gustav Jung fue un médico, psiquiatra y psicólogo suizo nacido un 26 de Julio de 1875. Desde pequeño Jung poseía un interés por las ciencias, la filosofía y la religión. De hecho su padre era un pastor protestante con conflictos de fe, algo que fue motivo primero de angustias pero luego de reflexión para el pequeño Jung. En su juventud Jung se decide por la medicina, y luego por la Psiquiatría. Tal como él mismo lo relatara en entrevistas y en su autobiografía, la Psiquiatría era una disciplina aún muy poco desarrollada. Jung escribió un libro sobre la demencia precoz, el cual le envió a Freud (a quien aún no conocía). Luego de nutridas correspondencias Jung visita a Freud, y según él mismo cuenta, su primer encuentro fue tan intenso que pasaron más de 10 horas seguidas dialogando y discutiendo temas de psiquiatría y del alma humana. Jung colaboró durante unos años con Freud, pero no fue su discípulo (como dicen quienes desconocen la verdadera historia relatada por Jung incluso en su Autobiografía). Las diferencias de enfoques ya estaban desde los inicios del vínculo. Jung tenía un fuerte interés por el pensamiento filosófico, y pertenecía a otra generación (ya que tenían una diferencia de casi 30 años de edad). Esto junto con su gran genialidad, le impulsó a incorporar en su metodología nociones procedentes de la antropología, la alquimia, los sueños, el arte, la mitología, la religión y la filosofía.</p>
            <p>Por otra parte, ya desde sus inicios Jung mantuvo su oposición a que la causa de la represión se hallara en el trauma sexual. Constantemente podía corroborar en su propia consulta cómo existían numerosos casos que no se avenían a la sexualidad como base de todo conflicto neurótico.
              Freud no se preguntó nunca por qué debía hablar constantemente sobre el sexo, por qué este pensamiento le poseía. Nunca tendría consciencia de que en la «monotonía del significado» se expresaba la huida de sí mismo, o de aquella otra parte suya que quizás pudiera definirse como «mística». Sin reconocer esta parte no podía sentirse acorde consigo mismo. Era ciego frente a la paradoja y la ambigüedad de los significados del inconsciente, y no sabía que todo cuanto emerge del inconsciente posee algo superior e inferior, algo interno y externo. Cuando se habla de lo externo —y esto hizo Freud— se considera sólo la mitad de ello y, consiguientemente, surge en el inconsciente una fuerza antagónica.
            Carl Gustav Jung. Recuerdos, sueños, pensamientos.</p>
            <p>Jung llegaría a decir de Freud que fue prisionero de un punto de vista, si bien nunca negó el gran aporte de Freud a los inicios de la Psicología.
            Sus investigaciones a menudo incursionaron en terrenos aparentemente alejados del suyo, como la religión (Psicología y religión, 1937) o la alquimia (Psicología y alquimia, 1944), profundizando en el estudio de conceptos tales como inconsciente colectivo, arquetipo (como fundamento para la existencia de mitos universalmente repetidos) o sí-mismo (ente distinto del «yo-ego-impermanente», que alude al YO REAL o al Ser espiritual en nuestro interior). Definió, asimismo, los tipos básicos de introvertido y extravertido.</p>
            <p>Un concepto clave en su obra es el de inconsciente colectivo, el que Jung explica que está constituido por Arquetipos. Ejemplos de estos arquetipos son el Personaje, la Sombra, el Santo, el Genio y el Héroe, el Self, el Ánimus y el Ánima. También identificaba como arquetípicas ciertas imágenes en concreto, como las representaciones del mándala. Para elaborar su concepto de arquetipo, Jung se inspiró en la reiteración de motivos o temas en diversas mitologías de las más remotas culturas: halló temas comunes inconscientes, que la humanidad reiteró apenas con ligeras variantes, según las circunstancias.
            A pesar de que somos hombres de nuestra propia vida personal somos también, por otra parte, representantes de nuestra humanidad, de la condición humana. Esos son los arquetipos, los modelos o imágenes primordiales universales y atemporales, y que por ende son patrones que se repiten en distintas culturas y épocas, y que nos guían desde nuestro inconsciente.</p>
            
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