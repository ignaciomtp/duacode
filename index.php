<?php

require_once "app/Router.php";
require_once "app/config.php";


Router::get('/', 'EquiposController', 'index');
Router::get('/equipos', 'EquiposController', 'index');
Router::get('/equipos/add', 'EquiposController', 'nuevoEquipo');
Router::post('/equipos/add', 'EquiposController', 'crearEquipo');
Router::get('/equipos/edit/[0-9]*', 'EquiposController', 'verEquipo');
Router::post('/equipos/edit/[0-9]*', 'EquiposController', 'actualizarEquipo');
Router::get('/jugadores', 'JugadoresController', 'index');