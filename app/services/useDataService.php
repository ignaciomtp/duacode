<?php

require_once "DataServiceInterface.php";
require_once "EquiposDataService.php";
require_once "DataService.php";




function connect() {
	$equiposDataService = new EquiposDataService;
	return new DataService($equiposDataService);
}