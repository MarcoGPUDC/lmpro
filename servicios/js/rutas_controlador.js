const express = require('express');
const router = express.Router();

router.get('/carreraProfesional', async (req, res) => {
    try {
      res.render('carreraProfesional');
    } catch (error) {
      console.error('Error al cargar el buscador', error);
      res.status(500).send('Error al optener las opciones.');
    }
  });

  router.get('/patrocinios&Endorsement', async (req, res) => {
    try {
      res.render('patrociniosEndorsement');
    } catch (error) {
      console.error('Error al cargar el buscador', error);
      res.status(500).send('Error al optener las opciones.');
    }
  });

  router.get('/financiera&Patrimonial', async (req, res) => {
    try {
      res.render('financieraPatrimonial');
    } catch (error) {
      console.error('Error al cargar el buscador', error);
      res.status(500).send('Error al optener las opciones.');
    }
  });

  router.get('/legal&Fiscal', async (req, res) => {
    try {
      res.render('legalFiscal');
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
      res.render('anticorrupcionSoborno');
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
      res.render('auditorias');
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