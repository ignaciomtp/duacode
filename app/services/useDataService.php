<?php


require_once "EquiposDataService.php";
require_once "JugadoresDataService.php";


function connectEquipo() {
	return new EquiposDataService;
}


function connectJugador() {
	return new JugadoresDataService;
}