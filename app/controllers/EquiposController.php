<?php

require_once 'Controller.php';
require_once "app/models/Equipo.php";


class EquiposController extends Controller {
	public function index() {
		$equipos = Equipo::allTeams();

		$this->view('equipos', ['equipos' => $equipos]);
	}
}