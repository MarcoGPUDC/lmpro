const express = require('express');
const router = express.Router();

router.get('/carreraProfesional', async (req, res) => {
    try {
      //Informacion pasada al front, para manejar dinamiamente
      const items = [
        {
          titulo: "Contratación artística y representación legal",
          desc: [
            "Redacción y negociación de contratos con actores, músicos, deportistas, influencers, etc.",
            "Asesoramiento a managers y agencias.",
            "Convenios con plataformas como Netflix y Spotify."
          ]
        },
        {
          titulo: "Derecho audiovisual y cinematográfico",
          desc: [
            "Asistencia legal en desarrollo, rodaje y distribución.",
            "Registro de obras en INCAA, DAC, SADAIC, etc.",
            "Contratos de coproducción internacional y cesión de imagen."
          ]
        },
        {
          titulo: "Industria musical",
          desc: [
            "Contratos de grabación, distribución y management.",
            "Registro y protección de obras y fonogramas.",
            "Cobro de regalías (SADAIC, CAPIF, AADI)."
          ]
        },
        {
          titulo: "Medios de comunicación y broadcasting",
          desc: [
            "Asesoramiento a canales de TV, radios, plataformas de streaming y OTT.",
            "Licencias de emisión, regulaciones de ENACOM o equivalentes internacionales.",
            "Protección frente a difamación, fake news, y conflictos con figuras públicas."
          ]
        },
        {
          titulo: "Influencers, gaming y redes sociales",
          desc: [
            "Asesoramiento legal a creadores de contenido y streamers.",
            "Contratos de representación, sponsorships, publicidad nativa y branded content.",
            "Regulación de uso de imagen, derechos de autor y conflictos con plataformas.",
            "Asuntos legales de e-sports, gaming competitivo y monetización en Twitch/YouTube."
          ]
        },
        {
          titulo: "Propiedad intelectual",
          desc: [
            {
              texto: "Registro y defensa de:",
              subitems: [
                "Obras artísticas, guiones, personajes, coreografías, podcasts, etc.",
                "Marcas, patentes, nombres artísticos y pseudónimos."
              ]
            },
            "Litigios por plagio, uso no autorizado, o infracciones contractuales."
          ]
        },
        {
          titulo: "Negocios internacionales y fiscalidad",
          desc: [
            "Estructuración legal de negocios en el exterior (producciones en LATAM, EE.UU., Europa, Países Árabes).",
            "Planificación fiscal para artistas que facturan en distintas jurisdicciones.",
            "Tratados de doble imposición y uso de sociedades (offshore/onshore)."
          ]
        },
        {
          titulo: "Litigios y resolución de conflictos",
          desc: [
            "Defensa ante incumplimientos contractuales, censura, conflictos entre artistas.",
            "Mediación y arbitraje en contratos internacionales de producción.",
            "Demandas por uso no autorizado de imagen, reputación o derecho al honor."
          ]
        },
        {
          titulo: "Docencia, consultoría y publicaciones",
          desc: [
            "Prácticas relacionadas con Entertainment Law para acreditar en Master y/o especializaciones (ISDE, Berklee, UBA, etc.).",
            "Consultoría en políticas culturales y regulación digital.",
            "Redacción de libros, artículos, papers y análisis en medios especializados."
          ]
        },
        {
          titulo: "Asesoramiento institucional y cultural",
          desc: [
            "Asistencia a organismos estatales o ONGs en materia de cultura, cine y tecnología.",
            "Redacción de leyes, reglamentos o programas de incentivo a la producción cultural."
          ]
        }
      ];
      
      res.render('carreraProfesional',{
        items: items
      });
    } catch (error) {
      console.error('Error al cargar el buscador', error);
      res.status(500).send('Error al optener las opciones.');
    }
  });

router.get('/patrocinios&Endorsement', async (req, res) => {
  try {
    //Informacion pasada al front, para manejar dinamiamente
    const items = [
      {
        titulo: "Mecenazgo Cultural y Deportivo",
        desc: [
          "Para artistas, fundaciones, instituciones y empresas que desean financiar o recibir financiamiento en proyectos de interés público.",
          "Redacción y presentación de proyectos ante programas de mecenazgo cultural (CABA, Nación, provincias).",
          "Asesoría jurídica para fundaciones, asociaciones civiles y cooperativas culturales o deportivas.",
          "Estructuración de convenios con artistas, deportistas o entidades beneficiarias.",
          "Asesoría sobre compatibilidad con programas internacionales (UNESCO, BID, ONU Cultura)."
        ]
      },
      {
        titulo: "Patrocinio cultural con beneficios fiscales para empresas",
        desc: [
          "Para marcas, empresas o individuos que buscan participar en proyectos con impacto social y deducción fiscal.",
          "Evaluación de la viabilidad fiscal del patrocinio en regímenes de mecenazgo nacional, provincial y municipal.",
          "Redacción de contratos de patrocinio con cláusulas de reconocimiento institucional, publicidad o uso de imagen.",
          "Estructuración de acuerdos híbridos (publicidad + RSE + mecenazgo).",
          "Defensa ante ARCA o entes locales en caso de observaciones o requerimientos por deducciones fiscales.",
          "Diseño de estrategias de visibilidad de marca en eventos culturales o deportivos con encuadre legal."
        ]
      },
      {
        titulo: "Servicios legales para clubes deportivos",
        desc: [
          "Para clubes, federaciones, ligas o asociaciones civiles con actividad profesional o amateur.",
          "Asesoramiento integral para el acceso a fondos de mecenazgo o subsidios culturales/deportivos.",
          "Redacción de convenios con marcas, sponsors o mecenas con cláusulas de beneficio mutuo.",
          "Regularización institucional (estatutos, personería, balances, libro de actas).",
          "Protección de la marca del club, derecho de imagen de sus jugadores y merchandising oficial.",
          "Asistencia en convenios de cesión de instalaciones, organización de torneos y eventos deportivos.",
          "Negociación y redacción de contratos de patrocinio técnico (indumentaria, equipamiento, transporte)."
        ]
      },
      {
        titulo: "Servicios legales para productoras, compañías artísticas y proyectos culturales",
        desc: [
          "Redacción de contratos con artistas, técnicos, escenógrafos y creativos.",
          "Protección de obras: derecho de autor, derechos conexos, cesiones y licencias.",
          "Estructuración legal y fiscal de giras, coproducciones, y distribución nacional e internacional.",
          "Contratos de patrocinio cultural con marcas, entes públicos o privados.",
          "Asesoramiento en campañas de recaudación a través de mecenazgo o crowdfundings con encuadre legal.",
          "Negociación de derechos de transmisión, reproducción o explotación de contenidos en plataformas."
        ]
      },
      {
        titulo: "Proyectos con impacto social, educativo e institucional",
        desc: [
          "Para entidades que desean fomentar el acceso al deporte y la cultura como política pública o RSE.",
          "Asesoría a municipios, gobiernos, ONG y empresas en el diseño de programas de acceso gratuito a actividades deportivas o culturales.",
          "Redacción de convenios interinstitucionales entre clubes, colegios, universidades o empresas.",
          "Contratos para uso de instalaciones, transporte, seguros y habilitaciones de eventos.",
          "Protección de derechos de menores, imagen y datos sensibles en proyectos sociales."
        ]
      },
      {
        titulo: "Servicios complementarios disponibles",
        desc: [
          {
            texto: "Formatos listos para presentar proyectos ante el Régimen de Mecenazgo de CABA o Nación."
          },
          {
            texto: "Modelos de contrato de patrocinio cultural con cláusulas fiscales y reconocimiento institucional."
          },
          {
            texto: "Redacción bilingüe (ES/EN) para proyectos con proyección internacional."
          },
          {
            texto: "Estructuración de paquetes de servicios legales para clubes, galerías o productoras culturales."
          }
        ]
      }
    ];  

    res.render('patrociniosEndorsement',{
      items: items
    });
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
});

router.get('/financiera&Patrimonial', async (req, res) => {
  try {
    //Informacion pasada al front, para manejar dinamiamente
    const items = [
      {
        titulo: "Planificación financiera y estructuración legal del patrimonio",
        desc: [
          "Diseño de estructuras jurídicas eficientes para la conservación, crecimiento y sucesión del patrimonio.",
          "Asesoría en planificación financiera integral: flujos, pasivos, ingresos extraordinarios y diversificación.",
          "Estructuración de holdings familiares, fideicomisos y sociedades vehiculares.",
          "Coordinación con asesores financieros y bancos privados para planificación conjunta."
        ]
      },
      {
        titulo: "Inversiones y adquisición de activos",
        desc: [
          "Due diligence legal para inversiones en empresas, inmuebles, obras de arte o activos alternativos.",
          "Asesoramiento en la constitución y administración de sociedades de inversión.",
          "Asistencia legal en operaciones en mercados de capitales y fondos privados (private equity, venture capital).",
          "Protección jurídica ante conflictos, fraudes o malas prácticas en inversiones patrimoniales."
        ]
      },
      {
        titulo: "Family office y gestión fiduciaria (trust & wealth management)",
        desc: [
          "Estructuración legal de family office (interno o externo) y redacción de estatutos o protocolos familiares.",
          "Creación y administración de fideicomisos (trusts) para gestión intergeneracional del patrimonio.",
          "Asesoramiento sobre distribución de roles familiares, gobierno corporativo y reglas de sucesión.",
          "Implementación de políticas de compliance patrimonial y prevención de conflictos."
        ]
      },
      {
        titulo: "Compra de inmuebles y administración de bienes",
        desc: [
          "Asesoramiento legal integral en operaciones inmobiliarias locales e internacionales.",
          "Estructuración fiscal y jurídica de compra de propiedades de lujo, inversión o uso mixto.",
          "Due diligence, escrituración, registración y administración legal de bienes raíces.",
          "Representación en alquileres, ventas, administración fiduciaria o en garantía."
        ]
      },
      {
        titulo: "Internacionalización de capital y planificación fiscal global",
        desc: [
          "Asistencia legal en apertura de cuentas bancarias y estructuras de inversión en el exterior.",
          "Asesoramiento en cumplimiento de normativa cambiaria y declaraciones de activos (ARCA, SISA, CRS, FATCA).",
          "Planificación fiscal internacional para evitar doble imposición y proteger activos.",
          "Gestión legal de activos globales (carteras, propiedades, cuentas, trusts)."
        ]
      },
      {
        titulo: "Protección legal ante crisis personales, sucesorias o fiscales",
        desc: [
          "Asistencia en procesos de divorcio con reparto de grandes patrimonios o bienes globales.",
          "Defensa ante fiscalizaciones, conflictos con herederos o reclamos sobre activos.",
          "Asesoramiento sucesorio y redacción de testamentos, pactos de herencia o acuerdos extrajudiciales.",
          "Gestión de donaciones, legados o cesiones patrimoniales con eficiencia fiscal."
        ]
      },
      {
        titulo: "Servicios complementarios",
        desc: [
          {
            texto: "Contratos de confidencialidad, representación o mandato para proteger la identidad del cliente."
          },
          {
            texto: "Asesoría en operaciones con criptoactivos y tokenización de bienes patrimoniales."
          },
          {
            texto: "Defensa en conflictos de jurisdicción internacional (residencia fiscal, herencias cruzadas, divorcios globales)."
          }
        ]
      }
    ];

    res.render('financieraPatrimonial', {
      items: items
    });
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
});

router.get('/legal&Fiscal', async (req, res) => {
  try {
    //Informacion pasada al front, para manejar dinamiamente
    const items = [
      {
        titulo: "Estructuración fiscal nacional e internacional",
        desc: [
          "Asesoramiento personalizado para residentes fiscales argentinos y/o extranjeros con activos globales.",
          "Análisis de escenarios de tributación multinacional y residencias fiscales alternativas.",
          "Optimización de la carga fiscal en estructuras personales, familiares y societarias.",
          "Revisión integral de activos y rentas: localización, titularidad, riesgo fiscal."
        ]
      },
      {
        titulo: "Planificación fiscal patrimonial y sucesoria",
        desc: [
          "Diseño de estructuras jurídicas eficientes para herencias, legados, donaciones y transmisiones inter vivos.",
          "Estructuración de fideicomisos, usufructos, testamentos cruzados y pactos sucesorios.",
          "Planificación fiscal en escenarios de sucesión internacional y familias multiresidencia."
        ]
      },
      {
        titulo: "Tributación de ingresos por actividades deportivas, artísticas y creativas",
        desc: [
          "Asesoría especializada en contratos internacionales de deportistas, artistas, influencers y creativos.",
          "Análisis de retenciones en origen, tratados para evitar la doble imposición y planificación por país.",
          "Diseño de estructuras de cobro: sociedades, agencias, trusts, fundaciones o sociedades holding."
        ]
      },
      {
        titulo: "Regularización de activos y cumplimiento fiscal",
        desc: [
          "Asistencia en exteriorización voluntaria de activos, moratorias y regímenes especiales de blanqueo.",
          "Defensa y representación ante ARCA, ARBA y organismos provinciales por requerimientos y fiscalizaciones.",
          "Análisis de riesgos penales tributarios y estrategias preventivas."
        ]
      },
      {
        titulo: "Asesoría en criptoactivos y nuevas formas de renta digital",
        desc: [
          "Tratamiento fiscal de inversiones en criptomonedas, NFT, plataformas Web3 y gaming.",
          "Estructuración de cobros, tenencias y operaciones con activos digitales desde el punto de vista fiscal.",
          "Cumplimiento de información sobre activos virtuales en declaraciones patrimoniales y regímenes internacionales (FATCA, CRS)."
        ]
      },
      {
        titulo: "Gestión de obligaciones fiscales internacionales",
        desc: [
          "Revisión y cumplimiento de reportes fiscales automáticos (FATCA – CRS – DAC6).",
          "Coordinación con contadores, bancos privados y asesores fiscales en el exterior.",
          "Estrategias para evitar doble imposición y cumplir con normas anti-elusión."
        ]
      }
    ];
    
    res.render('legalFiscal', {
      items: items
    });
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
});

router.get('/integridadDeporte', async (req, res) => {
  try {
    res.render('integridadDeporte');
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
});

router.get('/anticorrupcion&Soborno', async (req, res) => {
  try {
    //Imagenes pasadas al front, para manejar dinamiamente
    const items = [
      {titulo: "Artistas", img: "https://placehold.co/600x400?text=Artistas", desc: "Mecenazgo Cultural y Deportivo"},
      {titulo: "Cine y TV", img: "https://placehold.co/600x400?text=Cine+y+TV", desc: "Rodajes, distribución y derechos"},
      {titulo: "Streaming", img: "https://placehold.co/600x400?text=Streaming", desc: "YouTube, Twitch y contratos"}
    ]
    console.log(items)
    res.render('anticorrupcionSoborno',{
      items: items
    });
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
});

router.get('/blanqueoCapitales', async (req, res) => {
  try {
    res.render('blanqueoCapitales');
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
});

router.get('/datos&Privacidad', async (req, res) => {
  try {
    res.render('datosPrivacidad');
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
})

router.get('/etica&Marketing', async (req, res) => {
  try {
    res.render('eticaMarketing');
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
})

router.get('/auditorias', async (req, res) => {
  try {
    //Informacion pasada al front, para manejar dinamiamente    
    console.log(items)
    res.render('auditorias',{
      items: items
    });
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
})

router.get('/formacion&Sensibilizacion', async (req, res) => {
  try {
    res.render('formacionSensibilizacion');
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
})

router.get('/gestionReputacional', async (req, res) => {
  try {
    res.render('gestionReputacional');
  } catch (error) {
    console.error('Error al cargar el buscador', error);
    res.status(500).send('Error al optener las opciones.');
  }
})
module.exports = router;