<?php

require_once "app/Router.php";
require_once "app/config.php";


Router::get('/', 'EquiposController', 'index');
Router::get('/equipos', 'EquiposController', 'index');
Router::get('/jugadores', 'JugadoresController', 'index');