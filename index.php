<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="stylesheet" href="/css/index.css">
</head>
<body class="bg-negro">
  <div id="whatsapp">
    <a href="https://api.whatsapp.com/send/?phone=5491172233793" target="_blank">
      <img src="/public/img/logoWpp.svg" width="60" height="60" alt="WhatsApp">
    </a>
 </div>
  <!-- Navbar -->
  <?php include('componentes/navbar.html'); ?>

  <!-- Contenedor Principal -->
  <div id="servicios">
    <section class="py-6">
      <div class="container">
        <!--NUESTRO TRABAJO-->
        <div class="row g-4 ">
          <div class="container ">
            <div class="seccionInfo">
              <h4 class="seccionInfo-titulo colorTextoGeneral">SOBRE NOSOTROS</h4>
              <p class="seccionInfo-contenido">
                La industria del entretenimiento, en constante expansión y transformación, abarca una amplia gama de sectores como la música, el cine, la televisión, los deportes, los videojuegos y los contenidos digitales.
              </p>
              <p class="seccionInfo-contenido">
                En este escenario complejo y altamente competitivo, la intervención de expertos legales no es solo necesaria, sino estratégica.
                Desde la negociación de contratos y la gestión de derechos hasta la protección de la imagen y la monetización global de contenidos, ofrecemos un asesoramiento jurídico especializado y a medida de cada cliente.
              </p>
              <p class="seccionInfo-contenido">
                Somos aliados estratégicos acompañando cada proyecto con excelencia legal, sensibilidad comercial y compromiso en el desarrollo sustentable del talento.
              </p>
            </div>
          </div>
        </div>
        

      </div>
    </section>
    <hr class="linea-doble">
    <section class="py-6">
      <div class="container">
        <div class="py-6">
          <section class="seccionInfo">
            <h4 class="seccionInfo-titulo colorTextoGeneral">QUE NOS DIFERENCIA?</h4>
            <ul class="listaSinViñeta">
              <li class="seccionInfo-contenido"><h5>Asesoría jurídica integral con visión estratégica</h5>
                <p>Somos tu partner legal y estratégico en cada etapa de tu carrera o proyecto.</p>
              </li>
              <li class="seccionInfo-contenido"><h5>Presencia internacional y enfoque cross-border</h5>
                <p>Actuamos en Europa, América y países árabes, combinando derecho comparado, fiscalidad internacional y compliance.</p>
              </li>
              <li class="seccionInfo-contenido"><h5>Protección de tu talento como activo</h5>
                <p>Registramos, blindamos y defendemos lo que te hace único: tu imagen, tu nombre, tus obras, tu empresa y tu trayectoria.<br><br>
                  Aplicamos técnicas jurídicas avanzadas para convertir tu identidad en patrimonio jurídico.
                  </p>
              </li>
              <li class="seccionInfo-contenido"><h5>Servicios ultra personalizados</h5>
                <p>Nada estándar!. Cada contrato, estructura o defensa se diseña a medida, con un enfoque boutique y trato directo. Nos integramos a tu equipo como asesores jurídicos y estratégicos de confianza.</p>
              </li>
              <li class="seccionInfo-contenido"><h5>Conexión con el lifestyle de alto perfil</h5>
                <p>Entendemos tu estilo de vida, tus tiempos, tu marca personal y el peso de tu proyección pública.<br>Hablamos el lenguaje de los deportistas y artistas globales.<br>Cuidamos lo que otros no ven: tus detalles legales, tu blindaje reputacional y tu seguridad jurídica.
                  </p>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </section>
  
    <!-- Servicios -->
    <hr class="linea-doble">
    <!--NUESTROS SERVICIOS-->

    <section class="py-6 accordion" id="serviciosPrincipales">
      <div class="container">
        <div class="seccionInfo">
          <h4 class="seccionInfo-titulo colorTextoGeneral">NUESTROS SERVICIOS</h4>
        
          <!--LINEA 1-->
          <div class="row g-4 ">
            <!-- Servicio 1 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body">
                  <img src="/public/img/carrera profesional.jpg" alt="" class="img-servicio">
                  <h5 class="card-title" onclick="cargarServicio('carreraProfesional')"><a class="link-blanco" href="#profesional&RepresentaciónInfo">Carrera Profesional & Representación</a></h5>
                  <!--<p class="card-text">Explorá Ibiza desde el mar con nuestras embarcaciones de lujo.</p>-->
                </div>
              </div>
            </div>
            <!-- Servicio 2 con fondo degradado -->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body">
                  <img src="/public/img/patrocinios & endorsement.jpg" alt="Chef" class="img-servicio">
                  <h5 class="card-title" onclick="cargarServicio('patrocinios&Endorsement')"><a class="link-blanco" href="#patrocinios&Endorsement">Patrocinios & Endorsement</a></h5>
                  <!--<p class="card-text">Disfrutá de gastronomía exclusiva sin salir de tu villa.</p>-->
                </div>
              </div>
            </div>
            <!-- Servicio 3 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body" >
                  <img src="public/img/gestion financiera y patrimonial.webp" alt="VIP" class="img-servicio">
                  <h5 class="card-title" onclick="cargarServicio('financiera&Patrimonial')"><a class="link-blanco" href="#financiera&Patrimonial">Gestión Financiera & Patrimonial</a></h5>
                  <!--<p class="card-text">Acceso preferente a restaurantes, clubs y eventos de Ibiza.</p>-->
                </div>
              </div>
            </div>
            <!-- Servicio 4 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body" >
                  <img src="public/img/asesoramiento legal y fiscal.jpg" alt="VIP" class="img-servicio">
                  <h5 class="card-title"onclick="cargarServicio('legal&Fiscal')"><a class="link-blanco" href="#legal&Fiscal">Planificación Fiscal Estrategica</a></h5>
                  <!--<p class="card-text">Acceso preferente a restaurantes, clubs y eventos de Ibiza.</p>-->
                </div>
              </div>
            </div>
          </div>
          <!--LINEA 2-->
          <div class="row g-4 mt-2">
            <!-- Servicio 5 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body" >
                  <img src="public/img/compliance.jpg" alt="" class="img-servicio">
                  <h5 class="card-title" onclick="cargarServicio('integridadDeporte')"><a class="link-blanco" href="#integridadDeporte"></a>Compliance: Integridad en el deporte</h5>
                  <!--<p class="card-text">Explorá Ibiza desde el mar con nuestras embarcaciones de lujo.</p>-->
                </div>
              </div>
            </div>
            <!-- Servicio 6 con fondo degradado -->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body">
                  <img src="public/img/politicas anticorrupcion y soborno.png" alt="" class="img-servicio">
                  <h5 class="card-title" onclick="cargarServicio('anticorrupcion&Soborno')"><a class="link-blanco" href="#anticorrupcion&Soborno">Políticas anticorrupción & soborno</a></h5>
                  <!--<p class="card-text">Disfrutá de gastronomía exclusiva sin salir de tu villa.</p>-->
                </div>
              </div>
            </div>
            <!-- Servicio 7 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body" >
                  <img src="public/img/prevencion blanqueo de capitales.webp" alt="VIP" class="img-servicio">
                  <h5 class="card-title" onclick="cargarServicio('blanqueoCapitales')"><a class="link-blanco" href="#blanqueoCapitales">Prevención de blanqueo de capitales (PBC/AML)</a></h5>
                  <!--<p class="card-text">Acceso preferente a restaurantes, clubs y eventos de Ibiza.</p>-->
                </div>
              </div>
            </div>
            <!-- Servicio 8 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body">
                  <img src="public/img/proteccion de datos.png" alt="VIP" class="img-servicio">
                  <h5 class="card-title"  onclick="cargarServicio('datos&Privacidad')"><a class="link-blanco" href="#datos&Privacidad">Protección de datos & privacidad</a></h5>
                  <!--<p class="card-text">Acceso preferente a restaurantes, clubs y eventos de Ibiza.</p>-->
                </div>
              </div>
            </div>
          </div>
          <!--LINEA 3--> 
          <div class="row g-4 mt-2">
            <!-- Servicio 9 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body">
                  <img src="public/img/etica y buenas practicas de marketing.webp" alt="Yate" class="img-servicio">
                  <h5 class="card-title" onclick="cargarServicio('etica&Marketing')"><a class="link-blanco" href="#etica&Marketing">Ética & buenas prácticas en marketing</a></h5>
                  <!--<p class="card-text">Explorá Ibiza desde el mar con nuestras embarcaciones de lujo.</p>-->
                </div>
              </div>
            </div>
            <!-- Servicio 10 con fondo degradado -->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body">
                  <img src="public/img/auditorias internas y externas.jpg" alt="Chef" class="img-servicio">
                  <h5 class="card-title" onclick="cargarServicio('auditorias')"><a class="link-blanco" href="#auditorias">Auditorías internas & externas</a></h5>
                  <!--<p class="card-text">Disfrutá de gastronomía exclusiva sin salir de tu villa.</p>-->
                </div>
              </div>
            </div>
            <!-- Servicio 11 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body">
                  <img src="public/img/formacion y sensibilizacion.jpg" alt="VIP" class="img-servicio">
                  <h5 class="card-title" onclick="cargarServicio('formacion&Sensibilizacion')"><a class="link-blanco" href="#formacion&Sensibilizacion">Formación & sensibilización</a></h5>
                  <!--<p class="card-text">Acceso preferente a restaurantes, clubs y eventos de Ibiza.</p>-->
                </div>
              </div>
            </div>
            <!-- Servicio 12 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                <div class="card-body">
                  <img src="public/img/gestion-de-crisis-reputacional.jpg" alt="VIP" class="img-servicio">
                  <h5 class="card-title" onclick="cargarServicio('gestionReputacional')"><a class="link-blanco" href="#gestionReputacional">Gestión de crisis reputacional</a></h5>
                  <!--<p class="card-text">Acceso preferente a restaurantes, clubs y eventos de Ibiza.</p>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
  </div>
  <div id="containerAccordion">
    <div id="accordionServicios" class="accordion"></div>
  </div>

  <hr class="linea-doble">
  <!-- Footer -->
  <footer class="bg-dark text-white py-4 mt-4">
    <div class="container text-center">
      <a href="mailto:Layla@lmpro.fun" class="text-white"><p class="mb-1">Contacto: layla@lmpro.fun</p></a>
      <p class="mb-0 small">
        <a href="#" class="text-white text-decoration-none me-2">Política de Cookies</a>
        <a href="#" class="text-white text-decoration-none me-2">Privacidad</a>
        <a href="#" class="text-white text-decoration-none">Aviso Legal</a>
      </p>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/index.js" crossorigin="anonymous"></script>
</body>
</html>