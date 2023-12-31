<?php

require_once "app/Router.php";
require_once "app/config.php";


Router::get('/', 'EquiposController', 'index');
Router::get('/equipos', 'EquiposController', 'index');
Router::get('/equipos/add', 'EquiposController', 'nuevoEquipo');
Router::post('/equipos/add', 'EquiposController', 'crearEquipo');
Router::get('/equipos/edit/[0-9]*', 'EquiposController', 'verEquipo');
Router::post('/equipos/edit/[0-9]*', 'EquiposController', 'actualizarEquipo');
Router::post('/equipos/deleteteam', 'EquiposController', 'borrarEquipo');
Router::get('/equipos/capitan/[0-9]*', 'EquiposController', 'verCapitan');

Router::get('/jugadores', 'JugadoresController', 'index');
Router::get('/jugadores/add', 'JugadoresController', 'nuevoJugador');
Router::post('/jugadores/add', 'JugadoresController', 'crearJugador');
Router::get('/jugadores/edit/[0-9]*', 'JugadoresController', 'verJugador');
Router::post('/jugadores/edit/[0-9]*', 'JugadoresController', 'actualizarJugador');
Router::post('/jugadores/deleteplayer', 'JugadoresController', 'borrarJugador');