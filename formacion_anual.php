<!DOCTYPE html>
<html lang="">
  <head>
    <?php include('includes/head.php'); ?>
    <style>
    .panel-default {
    border-color: white;
    }
    .panel-default>.panel-heading {
    color: #333;
    background-color: white;
    border-color: white;
    }
    .nav-tabs {
    border-bottom: 1px solid #e0ded9;
    }
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #555;
    cursor: default;
    background-color: #fff;
    border-bottom-color: transparent;
    }
    .nav-tabs>li>a {
    border-color: white white #e0ded9;
    font-size: 19px;
    background-color: #f0f5f8;
    }
    .nav-tabs>li>a:hover {
    border-color: white white white;
    }
    .solicita_btn{
    cursor: pointer;
    border: none;
    background: #3277ae;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px 19px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font: bold 16px "PT Sans", sans-serif;
    text-transform: uppercase;
    }
    .solicita_btn:hover {
    color: white;
    background: #be0f34;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
    }
    .tab-content p{
    }
    img.program_image {
    float: left;
    margin-right: 20px;
    width: 100px;
    }
    ul.program_list {
    margin-left: 120px;
    width: auto;
    padding-bottom: 30px;
    }
    .panel-body li {
    font: 18px/28px "Segoe UI", arial, helvetica, roboto, "droid sans", sans-serif;
    margin-bottom: 5px;
    }
    .youtube-video{
    padding: 15px;
    min-width: : 420px;
    }
    </style>
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
        <div style="background-color: #ebebeb;" class="videoint">
          <iframe width="100%" height="640" class="video-header"
          src="https://www.youtube.com/embed/oLfeOdiyBqo">
          </iframe>
        </section>
        <!-- Page Content -->
        <div class="container-fluid cont-section" style="padding-top:20px" id="articulo">
          <!-- /.row -->
          <div class="row">
            <div class="col-sm-9">
              <!-- titulo -->
              <div class="page-header articulo_header">
                <h2 class="articulo_text_header" >PSICOLOGÍA TRANSPERSONAL </h2>
                <p class="h2sub"> Métodos: C. G. Jung, Cuarto Camino y Budismo.</p>
                
                <h6>Aprendé Técnicas para:</h6>
                
                <ul style="font-size: 18px;" class="formation_list">
                  <li>Liberarnos de las Emociones Negativas o Tóxicas.</li>
                  <li>Alcanzar el nivel de nuestra mente dónde el enojo, el miedo, etc. no pueden existir.</li>
                  <li>Lograr un estado de mayor atención y concentración.</li>
                  <li>Cultivar un estado de Paz y Claridad.</li>
                </ul>
                
                <div class="panel with-nav-tabs panel-default">
                  <div class="panel-heading">
                    <ul class="nav nav-tabs">
                      <li><a href="#tab4default" data-toggle="tab">OBJETIVOS</a></li>
                      
                      
                      
                      <li><a href="#tab9default" data-toggle="tab">MODALIDAD DE CURSADA</a></li>
                      
                      <li class="dropdown"><a href="#tab1default" data-toggle="tab">PROGRAMA<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#tab2default" data-toggle="tab">NIVEL 1</a></li>
                        <li><a href="#tab3default" data-toggle="tab">NIVEL 2</a></li>
                      </ul>
                    </li>
                    <li><a href="#tab5default" data-toggle="tab">ORIENTADO a...</a></li>
                    <li><a href="http://www.aztlan.org.ar/agenda.php" >CHARLAS INFORMATIVAS</a></li>
                  </ul>
                </div>
                <div class="panel-body">
                  <div class="tab-content">
                    <div class="tab-pane fade in" id="tab1default">
                      <span class="curso">Formación Anual</span>
                      <ul class="formation_list">
                        <li style="margin-top: 20px">CARL G. JUNG: Psicología Profunda de lo Inconsciente Colectivo y Arquetipos</li>
                        <li>CUARTO CAMINO: George I. Gurdjieff</li>
                        <li>Psicología y Filosofía Budista</li>
                        <li>Psicología de la Mecánica Cuántica</li>
                        <li>Filosofía Oriental y Occidental</li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="tab2default">
                      <!-- PROGRAMA DE ESTUDIOS NIVEL I -->
                      <h6 class="formation_section_title">Programa de Estudios Nivel I</h6>
                      <!-- PSICOLOGÍA -->
                      <div class="titles_container">
                        <img class="program_image" src="assets/images/formation/images_themes/1.png" />
                        <div class="program_titles">
                          <h6 class="formation_title">Psicolog&iacute;a</h6>
                          <h6 class="formation_subtitle">Su historia y desarrollo</h6>
                        </div>
                      </div>
                      <ul class="program_list">
                        <li>La Psicolog&iacute;a como Ciencia.</li>
                        <li>Precedentes hist&oacute;ricos.</li>
                        <li>Sus or&iacute;genes y desarrollo.</li>
                        <li>El porqu&eacute; de su necesidad.</li>
                        <li>Corrientes principales y sus paradigmas.</li>
                        <li>Jung, Gurdjieff, Castaneda y la Psicolog&iacute;a Evolutiva.</li>
                        <li>El Nuevo Paradigma en el conocimiento.</li>
                        <li>El observador como participante en la observaci&oacute;n.</li>
                        <li>La Fenomenolog&iacute;a.</li>
                        <li>Influencias de y sobre otras l&iacute;neas del saber.</li>
                        <li>Estados de Consciencia y Paradigmas. Conflicto entre lo &quot;ordinario y lo extraordinario&quot;.</li>
                        <li>La esencia del m&eacute;todo cient&iacute;fico y sus limitaciones.</li>
                        <li>F&iacute;sica Cu&aacute;ntica, Medicina, Filosof&iacute;a, Antropolog&iacute;a, etc.</li>
                      </ul>
                      <!-- CARL GUSTAV JUNG -->
                      <div class="titles_container">
                        <img class="program_image" src="assets/images/formation/images_themes/2.png"/>
                        <div class="program_titles">
                          <h6 class="formation_title">CARL GUSTAV JUNG</h6>
                          <h6 class="formation_subtitle">Psicolog&iacute;a Profunda de lo Inconsciente Colectivo y Arquetipos</h6>
                        </div>
                      </div>
                      <ul class="program_list">
                        <li>Rese&ntilde;a Biogr&aacute;fica y su obra. Campos que abarca su teor&iacute;a..</li>
                        <li>La PSIQUE como alma. Totalidad. Las Cuatro Funciones: Pensamiento, Sentimiento, Sensaci&oacute;n e Intuici&oacute;n.</li>
                        <li>El Ego; El Inconsciente Personal y sus contenidos. Teor&iacute;a de los complejos.</li>
                        <li>El Inconsciente Colectivo y los Arquetipos. Arquetipos principales, Anima-Animus - Personaje - Sombra - Self.</li>
                        <li>La L&iacute;bido en Jung diferenciada de otras concepciones de la l&iacute;bido.</li>
                        <li>Los Valores Ps&iacute;quicos.</li>
                        <li>La funci&oacute;n de la Intuici&oacute;n.</li>
                        <li>La concepci&oacute;n energetista en Just. Principio de Equivalencia. La Entrop&iacute;a en el funcionamiento Ps&iacute;quico.</li>
                        <li>La Canalizaci&oacute;n de Energ&iacute;a, Catarsis y Transferencia.</li>
                        <li>La Individuaci&oacute;n y su analog&iacute;a con la Iniciaci&oacute;n en los pueblos antiguos.</li>
                        <li>La Funci&oacute;n Trascendente en el Psiquismo. Los Tipos Psicol&oacute;gicos.</li>
                      </ul>
                      <!-- GEORGE IVANOVICH GURDJIEFF -->
                      <div class="titles_container">
                        <img class="program_image" src="assets/images/formation/images_themes/7.png" />
                        <div class="program_titles">
                          <h6 class="formation_title">GEORGE IVANOVICH GURDJIEFF</h6>
                          <h6 class="formation_subtitle">Psicolog&iacute;a y Filosof&iacute;a Evolutiva I</h6>
                        </div>
                      </div>
                      <ul class="program_list">
                        <li>Rese&ntilde;a Biogr&aacute;fica y su obra. Campos que abarca su teor&iacute;a..</li>
                        <li>Campos que abarca su teor&iacute;a.</li>
                        <li>Qu&eacute; es el Cuarto Camino. Una nueva visi&oacute;n de la Psique. La Vida como escuela.</li>
                        <li>Niveles de Consciencia.</li>
                        <li>La ausencia de unidad en el hombre. Yoes.</li>
                        <li>T&eacute;cnicas psicol&oacute;gicas de Observaci&oacute;n y Recuerdo de S&iacute; para el desarrollo de un temperamento equilibrado.</li>
                        <li>La Estructura de la Psique y sus funciones. Los Centros Intelectual, Emocional, Vegetativo y Motriz.</li>
                        <li>Consciencia Emocionada, las Emociones Negativas y su transformac&oacute;n no represi&oacute;n.</li>
                        <li>Consideraci&oacute;n Interna y Consideraci&oacute;n Externa.</li>
                        <li>La No Identificaci&oacute;n con los contenidos Ps&iacute;quicos.</li>
                        <li>Eventos y Estados.</li>
                        <li>La Alquimia en el Cuarto Camino.</li>
                        <li>La Cosmolog&iacute;a en su sistema. Las leyes de Siete y de Tres.</li>
                        <li>La Tabla de Hidr&oacute;genos de Gurdjieff.</li>
                        <li>Los tres alimentos en el hombre. El Aire, la Comida y las Impresiones.</li>
                        <li>La transformaci&oacute;n de las impresiones.</li>
                        <li>Las tres l&iacute;neas de trabajo.</li>
                      </ul>
                      <!-- PSICOLOGÍA Y FILOSOFÍA BUDISTA -->
                      <div class="titles_container">
                        <img class="program_image" src="assets/images/formation/images_themes/6.png" />
                        <div class="program_titles">
                          <h6 class="formation_title">PSICOLOG&Iacute;A Y FILOSOF&Iacute;A BUDISTA</h6>
                          <h6 class="formation_subtitle">Budismo</h6>
                        </div>
                      </div>
                      <ul class="program_list">
                        <li>Sidharta Gautama El Buda.</li>
                        <li>Desarrollo Hist&oacute;rico del Budismo y su Filosof&iacute;a y Psicolog&iacute;a.</li>
                        <li>El Budismo entendido como Ciencia de la Mente.</li>
                        <li>Naturaleza y Funci&oacute;n del Hombre en el Budismo.</li>
                        <li>Muerte, Renacer y Karma.</li>
                        <li>El Sufrimiento, el Dolor y su Superaci&oacute;n.</li>
                        <li>Las Cuatro Nobles Verdades y el Noble &Oacute;ctuple Sendero.</li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="tab3default">
                      <!-- PROGRAMA DE ESTUDIOS NIVEL II -->
                      <h6 class="formation_section_title">Programa de Estudios Nivel II</h6>
                      <!-- CARL GUSTAV JUNG -->
                      <div class="titles_container">
                        <img class="program_image" src="assets/images/formation/images_themes/4.png" />
                        <div class="program_titles">
                          <h6 class="formation_title">CARL GUSTAV JUNG</h6>
                          <h6 class="formation_subtitle">Psicolog&iacute;a Profunda de lo Inconsciente Colectivo y Arquetipos</h6>
                        </div>
                      </div>
                      <ul class="program_list">
                        <li>Los Mitos en Jung y Joseph Campbell.</li>
                        <li>El arquetipo del Centro - el Self: S&iacute;mbolos de Totalidad. El Mandala.</li>
                        <li>El arquetipo del H&eacute;roe.</li>
                        <li>La importancia del desarrollo arm&oacute;nico de la vida afectiva en el presente. Anima: la mujer interior, y Animus: el hombre interior.</li>
                        <li>El Proceso de Individuaci&oacute;n.</li>
                        <li>Simbolismo e interpretaci&oacute;n de los sue&ntilde;os. Los diferentes tipos de sue&ntilde;os.</li>
                        <li>El Principio de Sincronicidad en los sistemas oraculares o m&eacute;todos de adivinaci&oacute;n antiguos y modernos (I-Ching, Astrolog&iacute;a).</li>
                        <li>Jung y su clarificaci&oacute;n de las corrientes orientales. Budismo, Tao&iacute;smo e Hinduismo.</li>
                        <li>La Alquimia y el Gnosticismo. La M&iacute;stica Cristiana en Jung.</li>
                      </ul>
                      <!-- CUARTO CAMINO -->
                      <div class="titles_container">
                        <img class="program_image" src="assets/images/formation/images_themes/3.png" />
                        <div class="program_titles">
                          <h6 class="formation_title">CUARTO CAMINO</h6>
                          <h6 class="formation_subtitle">Psicolog&iacute;a y Filosof&iacute;a Evolutiva II</h6>
                        </div>
                      </div>
                      <ul class="program_list">
                        <li>El ascenso de la Consciencia por el Rayo de Creaci&oacute;n.</li>
                        <li>La Dualidad y la Tercera Fuerza.</li>
                        <li>La Ley del P&eacute;ndulo.</li>
                        <li>La Ley del Accidente y la Ley del Destino.</li>
                        <li>Libertad y Libre Albedr&iacute;o.</li>
                        <li>Los Centros Superiores.</li>
                        <li>Ley de Octavas (Ley del movimiento de la energ&iacute;as).</li>
                        <li>Nuevas herramientas para la Observaci&oacute;n de S&iacute;.</li>
                      </ul>
                      <!-- PSICOLOGÍA DE LA MECÁNICA CUÁNTICA -->
                      <div class="titles_container">
                        <img class="program_image" src="assets/images/formation/images_themes/5.png" />
                        <div class="program_titles">
                          <h6 class="formation_title">PSICOLOG&Iacute;A DE LA MEC&Aacute;NICA CU&Aacute;NTICA</h6>
                        </div>
                      </div>
                      <ul class="program_list">
                        <li>El observador como participante en la observaci&oacute;n.</li>
                        <li>¿Qu&eacute; es la realidad? Percepci&oacute;n.</li>
                        <li>David Bohm. Orden Implicado.</li>
                        <li>Rupert Sheldrake. Los Campos m&oacute;rficos.</li>
                        <li>Influencias de y sobre otras l&iacute;neas del saber.</li>
                        <li>Estados de Consciencia y Paradigmas. Conflicto entre lo "ordinario y lo extraordinario".</li>
                        <li>La esencia del m&eacute;todo cient&iacute;fico y sus limitaciones.</li>
                      </ul>
                      <!-- INTRODUCCIÓN A LA FILOSOFÍA OCCIDENTAL -->
                      <div class="titles_container">
                        <img class="program_image" src="assets/images/formation/images_themes/8.png" />
                        <div class="program_titles">
                          <h6 class="formation_title">INTRODUCCI&Oacute;N A LA FILOSOF&Iacute;A OCCIDENTAL</h6>
                          <h6 class="formation_subtitle">Evoluci&oacute;n del Pensamiento Occidental</h6>
                        </div>
                      </div>
                      <ul class="program_list">
                        <li>Diferenciar entre el m&eacute;todo psicol&oacute;gico y el filos&oacute;fico.</li>
                        <li>Paralelismo entre la Psicolog&iacute;a Evolutiva y la Filosof&iacute;a.</li>
                        <li>Introducci&oacute;n a la Filosof&iacute;a de Grecia: La doctrina pitag&oacute;rica.</li>
                        <li>Her&aacute;clito. S&oacute;crates. Plat&oacute;n Arist&oacute;teles. Neoplatonismo: Plotino. Estoicismo.</li>
                        <li>Kant, Descartes, Plat&oacute;n, El Super Hombre de Nietzsche, el Eterno Retorno.</li>
                        <li>Filosof&iacute;a de la Historia: Modos y sentidos del devenir hist&oacute;rico.</li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="tab9default">
                      <span class="curso">COMIENZO CICLO LECTIVO ANUAL 2017<br>Lunes 6 de Marzo
                      </span>
                      
                      <h6>Días y Horarios de cursada:</h6>
                      <ul style="margin-bottom: 20px;">
                        <li> <strong>Turno Mañana:</strong> Lunes, Martes, Miércoles o Jueves a las 10:30 hs.</li>
                        <li><strong>Turno Tarde:</strong> Lunes, Martes, Miércoles o Jueves a las 19:00 hs.</li>
                      </ul>
                      
                      <h6>Frecuencia:</h6>
                      <p>1 vez a la semana 1h 30 m cada clase.</p>
                      <p>De acuerdo al interés y tiempo de cada alumno existe la posibilidad de ampliar la carga horaria de clases y formación por medio de las prácticas que se conforman una vez que el grupo que cursa se encuentra en un nivel homogéneo en cuanto a contenidos y asimilación de los mismos.</p>
                      <h6>Materiales:</h6>
                      <p>Se entregarán apuntes, se proyectarán videos que apoyen los temas dados y se dará al comienzo de la Carrera la bibliografiá requerida.</p>
                      <p style="font-weight: bold;">ABIERTA LA INSCRIPCIÓN a la formación en Psicología Transpersonal.</p>
                      <a href="contacto.php" class="button solicita_btn">SOLICITÁ MÁS INFORMACIÓN AQUÍ</a>
                    </div>
                    
                    
                    <div class="tab-pane fade in" id="tab4default">
                      
                      
                      <ul class="formation_list">
                        <li>Conocer las principales ideas de los m&aacute;s importantes psic&oacute;logos y fil&oacute;sofos de la antigüedad y de la actualidad.</li>
                        <li>Adquirir los conocimientos necesarios para vernos a nosotros mismos y nuestra &eacute;poca actual desde nuevos puntos de referencia.</li>
                        <li>Entender la psicolog&iacute;a y la filosof&iacute;a como una pr&aacute;ctica a realizar, no s&oacute;lo desde el punto de vista te&oacute;rico.</li>
                        <li>Hallar nuevos significados y prop&oacute;sitos.</li>
                        <li>Formar individuos con un enfoque totalizador y no fragmentario de la existencia.</li>
                        <li>Ayudar a estos individuos a que puedan desarrollar un equilibrio psicol&oacute;gico basado en la pr&aacute;ctica de un conocimiento diferente de la vida y que esto se vea plasmado en una vida profesional, afectiva y psicol&oacute;gica m&aacute;s plena.</li>
                        <li>Contribuir a que la cultura local se eleve y dignifique por medio del aporte educativo y formativo de individuos que se comprometan y responsabilicen de su compromiso con el pr&oacute;jimo y la sociedad en general.</li>
                      </ul>
                      
                      
                      
                    </div>
                    <div class="tab-pane fade" id="tab5default">
                      <ul class="formation_list">
                        <li>Estudiantes y profesionales de todas las ramas del conocimiento.</li>
                        <li>Toda persona que identifique que para poder desempe&ntilde;arse en la vida con &eacute;xito y plenitud, es fundamental la adquisici&oacute;n y pr&aacute;ctica de nuevos conocimientos.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-6">
                <div class="youtube-video">
                  <iframe width="100%" height="250"
                  src="https://www.youtube.com/embed/aEipnTZa404">
                  </iframe>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="youtube-video">
                  <iframe width="100%" height="250"
                  src="https://www.youtube.com/embed/-2kQ1ISpvj4">
                  </iframe>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="youtube-video">
                  <iframe width="100%" height="250"
                  src="https://www.youtube.com/embed/-Gfs1ZNk34M">
                  </iframe>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="youtube-video">
                  <iframe width="100%" height="250"
                  src="https://www.youtube.com/embed/Zm1OU5gs0_g">
                  </iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <?php include('includes/rside_anual.php');?>
              <!-- <img class="img-responsive" src="assets/images/articulos/aside.jpg" alt=""/>  -->
            </div>
          </div>
        </div><br>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      <?php include('includes/footer.php');?>
    </div>
  </div>
  <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581e95d72d475c8b"></script>
</body>
</html>