function crearAcordeon(items) {
    const contenedor = document.getElementById('servicios');
    contenedor.setAttribute('style','display:none');
    const acordion = document.getElementById('accordionServicios')
    acordion.innerHTML = ' ';
    items.forEach((item, i) => {
      const encabezado = document.createElement('div');
      if (item.desc){
        encabezado.className = 'accordion-item';
        encabezado.innerHTML = `
        <h2 class="accordion-header" id="heading${i}">
          <button class="accordion-button collapsed bg-degradado-dorado-fijo"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse${i}"
                  aria-expanded="false"
                  aria-controls="collapse${i}">
            ${item.titulo}
          </button>
        </h2>
    
        <div id="collapse${i}" class="accordion-collapse collapse">
          <div class="accordion-body">
            ${generarLista(item.desc)}
          </div>
        </div>
      `;
      } else {
        encabezado.innerHTML = `
        <h2 class="bg-degradado-dorado-fijo listItem">
          ${item.titulo}
        </h2>
      `;
      }
      
    
      document.getElementById('accordionServicios').appendChild(encabezado);
      bajaContenedorFadeInNuevo(encabezado, i);
    });
    //const imagen = document.createElement('img');
    //imagen.id = 'imagenAccordion';
    //imagen.src = 'https://placehold.co/400x766?text=Imagen+representativa';
    //document.getElementById('containerAccordion').appendChild(imagen);
  }
  
  function generarLista(desc) {
    
    const ul = document.createElement('ul');
    if(desc) {
      desc.forEach(punto => {
        if (typeof punto === 'string') {
          const li = document.createElement('li');
          li.textContent = punto;
          ul.appendChild(li);
        } else if (punto.texto) {
          const li = document.createElement('li');
          li.textContent = punto.texto;
          if (punto.subitems) {
            const subUl = document.createElement('ul');
            punto.subitems.forEach(sub => {
              const subLi = document.createElement('li');
              subLi.textContent = sub;
              subUl.appendChild(subLi);
            });
            li.appendChild(subUl);
          }
          ul.appendChild(li);
        }
      });
    }
    return ul.outerHTML;
  }
  
  // Cargar datos al hacer clic en una card
  function cargarServicio(nombreArchivo) {
    fetch(`/servicios/data/${nombreArchivo}.json`)
      .then(res => res.json())
      .then(data => {
        crearAcordeon(data);
        document.getElementById("fotoPrincipal").setAttribute('style', 'display: none;');
        document.getElementById("textoFotoPrincipal").setAttribute('style', 'display: none;');
      })
      .catch(err => console.error('Error al cargar JSON', err));
  }
  


  //Animaciones del acordeon  
  function bajaContenedorFadeInNuevo(contenedor, i) {
    gsap.from(contenedor, {
    duration: 0.7,
    opacity: 0,
    y: 20,
    ease: "power2.out",
    delay: i * 0.3 // para escalonar animaciones si querés
  });
  }

  //volver a servicios
  function volver() { 
    const acordion = document.getElementById('accordionServicios')
    const contenedor = document.getElementById('servicios');
    //const imagenAcordion = document.getElementById('imagenAccordion')
    //imagenAcordion.remove();
    while (acordion.firstChild) {
      acordion.firstChild.remove();
    }
    contenedor.setAttribute('style','display:block');
    document.getElementById("fotoPrincipal").setAttribute('style', 'display: flex;')
    document.getElementById("textoFotoPrincipal").setAttribute('style', 'display: flex;')
  }
  