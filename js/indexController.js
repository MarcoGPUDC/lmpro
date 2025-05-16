const express = require('express');
const fs = require('fs');
const path = require('path');

const app = express();

// Servir archivos estáticos
app.use(express.static('public'));

// Servir archivos de la carpeta "archivos" públicamente
app.use('/', express.static(path.join(__dirname)));

// API que devuelve listado de archivos
app.get('/api/archivos', (req, res) => {
  const carpeta = path.join(__dirname, 'public', 'img');
  console.log(carpeta)
  fs.readdir(carpeta, (err, archivos) => {
    if (err) return res.status(500).json({ error: 'Error al leer la carpeta' });

    const lista = archivos.map(nombreArchivo => ({
      nombre: nombreArchivo.replace(/-/g, ' '),
      url: `/public/img/${encodeURIComponent(nombreArchivo)}`
    }));

    res.json(lista);
  });
});

app.listen(3000, () => {
  console.log('Servidor en http://localhost:3000');
});
