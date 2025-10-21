<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
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
    <!-- Nuestro Trabajo -->
    <section class="py-6">
      <div class="container">
        <div class="row g-4 ">
          <div class="container ">
            <!--
            <div class="seccionInfo">
              <h4 class="seccionInfo-titulo colorTextoGeneral">SOBRE NOSOTROS</h4>
              <ul class="listaSinViñeta">
                <li class="seccionInfo-contenido">
                  <p>La industria del entretenimiento, que abarca sectores como la música, el cine, la televisión, los deportes, los videojuegos y los contenidos digitales, es muy competitiva y exigente.</p>
                </li>
                <li class="seccionInfo-contenido">
                  <p>En este contexto, la asistencia de profesionales del derecho resulta indispensable para garantizar el éxito y la protección de los intereses de los involucrados. Ofrecemos un servicio de asesoramiento jurídico especializado y adaptado a las necesidades específicas de cada cliente.</p>
                </li>
                <li class="seccionInfo-contenido">
                  <p>Actuamos como aliados estratégicos, brindando apoyo a cada proyecto con excelencia, visión y compromiso en el desarrollo sostenible del talento.</p>
                </li>
              </ul>
            </div>-->
          </div>
        </div>
        

      </div>
    </section>
    <!--<hr class="linea-doble">-->
    <!--QUE NOS DIFERENCIA?-->
    <section class="py-6">
      <div class="container">
        <div class="py-6">
          <section class="seccionInfo">
            <h4 class="seccionInfo-titulo colorTextoGeneral">QUE NOS DIFERENCIA?</h4>
            <ul class="listaSinViñeta">
              <li class="seccionInfo-contenido"><h5>Asesoría jurídica integral con visión estratégica</h5>
               <!--<p>Somos tu partner legal y estratégico en cada etapa de tu carrera o proyecto.</p>-->
              </li>
              <li class="seccionInfo-contenido"><h5>Presencia internacional y enfoque cross-border</h5>
                <!--<p>Actuamos en Europa, América y países árabes, combinando derecho comparado, fiscalidad internacional y compliance.</p>-->
              </li>
              <li class="seccionInfo-contenido"><h5>Protección de tu talento como activo</h5>
                <!--<p>Registramos, blindamos y defendemos lo que te hace único: tu imagen, tu nombre, tus obras, tu empresa y tu trayectoria.<br><br>
                  Aplicamos técnicas jurídicas avanzadas para convertir tu identidad en patrimonio jurídico.
                  </p>-->
              </li>
              <li class="seccionInfo-contenido"><h5>Servicios ultra personalizados</h5>
                <!--<p>Nada estándar!. Cada contrato, estructura o defensa se diseña a medida, con un enfoque boutique y trato directo. Nos integramos a tu equipo como asesores jurídicos y estratégicos de confianza.</p>-->
              </li>
              <li class="seccionInfo-contenido"><h5>Conexión con el lifestyle de alto perfil</h5>
                <!--<p>Entendemos tu estilo de vida, tus tiempos, tu marca personal y el peso de tu proyección pública.<br>Hablamos el lenguaje de los deportistas y artistas globales.<br>Cuidamos lo que otros no ven: tus detalles legales, tu blindaje reputacional y tu seguridad jurídica.
                  </p>-->
              </li>
            </ul>
          </section>
        </div>
      </div>
    </section>

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
              <a class="link-blanco" onclick="cargarServicio('carreraProfesional')" href="#carreraProfesional">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body" >
                    <img src="/public/img/carrera profesional.jpg" alt="" class="img-servicio">
                    <h5 class="card-title" >Carrera Profesional & Representación</h5>
                  </div>
                </div>
              </a>
            </div>
            <!-- Servicio 2 con fondo degradado -->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" onclick="cargarServicio('patrocinios&Endorsement')" href="#patrocinios&Endorsement">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body">
                    <img src="/public/img/patrocinios & endorsement.jpg" alt="Chef" class="img-servicio">
                    <h5 class="card-title" >Patrocinios & Endorsement</h5>
                  </div>
                </div>
              </a>

            </div>
            <!-- Servicio 3 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" onclick="cargarServicio('financiera&Patrimonial')" href="#financiera&Patrimonial">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body" >
                    <img src="public/img/gestion financiera y patrimonial.webp" alt="VIP" class="img-servicio">
                    <h5 class="card-title">Gestión Financiera & Patrimonial</h5>
                  </div>
                </div>
              </a>
            </div>
            <!-- Servicio 4 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" onclick="cargarServicio('legal&Fiscal')" href="#legal&Fiscal">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body" >
                    <img src="public/img/asesoramiento legal y fiscal.jpg" alt="VIP" class="img-servicio">
                    <h5 class="card-title">Planificación Fiscal Estrategica</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!--LINEA 2-->
          <div class="row g-4 mt-2">
            <!-- Servicio 5 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" onclick="cargarServicio('integridadDeporte')" href="#integridadDeporte">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body" >
                    <img src="public/img/compliance.jpg" alt="" class="img-servicio">
                    <h5 class="card-title" >Compliance: Integridad en el deporte</h5>
                  </div>
                </div>
              </a>
            </div>
            <!-- Servicio 6 con fondo degradado -->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" onclick="cargarServicio('anticorrupcion&Soborno')" href="#anticorrupcion&Soborno">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body">
                    <img src="public/img/politicas anticorrupcion y soborno.png" alt="" class="img-servicio">
                    <h5 class="card-title">Políticas anticorrupción & soborno</h5>
                  </div>
                </div>
              </a>
            </div>
            <!-- Servicio 7 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" onclick="cargarServicio('blanqueoCapitales')" href="#blanqueoCapitales">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body" >
                    <img src="public/img/prevencion blanqueo de capitales.webp" alt="VIP" class="img-servicio">
                    <h5 class="card-title" >Prevención de blanqueo de capitales (PBC/AML)</h5>
                  </div>
                </div>
              </a>
            </div>
            <!-- Servicio 8 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" onclick="cargarServicio('datos&Privacidad')" href="#datos&Privacidad">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body">
                    <img src="public/img/proteccion de datos.png" alt="VIP" class="img-servicio">
                    <h5 class="card-title">Protección de datos & privacidad</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!--LINEA 3--> 
          <div class="row g-4 mt-2">
            <!-- Servicio 9 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" href="#etica&Marketing" onclick="cargarServicio('etica&Marketing')">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body">
                    <img src="public/img/etica y buenas practicas de marketing.webp" alt="Yate" class="img-servicio">
                    <h5 class="card-title">Ética & buenas prácticas en marketing</h5>
                  </div>
                </div>
              </a>
            </div>
            <!-- Servicio 10 con fondo degradado -->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" href="#auditorias" onclick="cargarServicio('auditorias')">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body">
                    <img src="public/img/auditorias internas y externas.jpg" alt="Chef" class="img-servicio">
                    <h5 class="card-title">Auditorías internas & externas</h5>
                  </div>
                </div>
              </a>
            </div>
            <!-- Servicio 11 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" href="#formacion&Sensibilizacion" onclick="cargarServicio('formacion&Sensibilizacion')">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body">
                    <img src="public/img/formacion y sensibilizacion.jpg" alt="VIP" class="img-servicio">
                    <h5 class="card-title">Formación & sensibilización</h5>
                  </div>
                </div>
              </a>
            </div>
            <!-- Servicio 12 con fondo degradado-->
            <div class="col-md-6 col-lg-3">
              <a class="link-blanco" href="#gestionReputacional" onclick="cargarServicio('gestionReputacional')">
                <div class="card h-100 shadow-sm border-0 bg-degradado-dorado">
                  <div class="card-body">
                    <img src="public/img/gestion-de-crisis-reputacional.jpg" alt="VIP" class="img-servicio">
                    <h5 class="card-title" onclick="cargarServicio('gestionReputacional')"><a class="link-blanco" href="#gestionReputacional">Gestión de crisis reputacional</a></h5>
                  </div>
                </div>
              </a>
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
        Copyright © 2025 LMPRO. All rights reserved.
      </p>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/index.js" crossorigin="anonymous"></script>
</body>
</html>