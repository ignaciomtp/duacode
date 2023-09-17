<?php

require_once 'Controller.php';
require_once "app/models/Equipo.php";
require_once "app/models/Jugador.php";


class EquiposController extends Controller {

	public function index() {

		$equipos = Equipo::allTeams();

		$this->view('equipos', ['equipos' => $equipos]);
	}


	public function verEquipo() {

		$path_info = $_SERVER['REQUEST_URI'] ?? '/';

		$uri = explode('/', $path_info);	

		$id = end($uri);

		$equipo = Equipo::getTeam($id);

		$jugadores = Jugador::getPlayersByTeam($id);

		$this->view('editar-equipo', ['equipo' => $equipo, 'jugadores' => $jugadores]);

	}

	public function nuevoEquipo() {

		$this->view('nuevo-equipo');
	}

	public function crearEquipo() {

		$nombre = $_POST['nombre'];
		$ciudad = $_POST['ciudad'];
		$deporte = $_POST['deporte'];
		$fundacion = $_POST['fundacion'];

		$equipo = new Equipo($nombre, $ciudad, $deporte, $fundacion);

		$equipo->createTeam();

		header('Location: ../');
		exit();

	}

	public function actualizarEquipo() {

		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$ciudad = $_POST['ciudad'];
		$deporte = $_POST['deporte'];
		$fundacion = $_POST['fundacion'];

		Equipo::updateTeam($id, $nombre, $ciudad, $deporte, $fundacion);

		header('Location: ../../');
		exit();		
	}

	public function borrarEquipo() {

		$id = $_POST['teamId'];

		Equipo::deleteTeam($id);

		header('Location: ../');
		exit();
	}

	public function verCapitan() {
		$path_info = $_SERVER['REQUEST_URI'] ?? '/';

		$uri = explode('/', $path_info);	

		$id = end($uri);

		$capitan = Equipo::getTeamCaptain($id);

		if($capitan) {
			$equipos = Equipo::allTeams();

			$this->view('editar-jugador', ['jugador' => $capitan, 'equipos' => $equipos]);		
		} else {
			$this->view('error-page', ['id' => $id]);
		}


	}

}