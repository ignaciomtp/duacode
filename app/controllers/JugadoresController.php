<?php

require_once 'Controller.php';
require_once "app/models/Equipo.php";
require_once "app/models/Jugador.php";


class JugadoresController extends Controller {

	public function index() {

		$jugadores = Jugador::allPlayers();

		$this->view('jugadores', ['jugadores' => $jugadores]);
	}


	public function verJugador() {

		$path_info = $_SERVER['REQUEST_URI'] ?? '/';

		$uri = explode('/', $path_info);	

		$id = end($uri);

		$jugador = Jugador::getPlayer($id);

		$equipos = Equipo::allTeams();

		$this->view('editar-jugador', ['jugador' => $jugador, 'equipos' => $equipos]);

	}

	public function nuevoJugador() {
		$equipos = Equipo::allTeams();

		$this->view('nuevo-jugador', ['equipos' => $equipos]);
	}

	public function crearJugador() {

		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$numero = $_POST['numero'];
		$nacimiento = $_POST['nacimiento'];
		$equipo = $_POST['equipo'];

		$jugador = new Jugador($nombre, $apellidos, $numero, $nacimiento, $equipo);

		$jugador->createPlayer();

		header('Location: ../jugadores');
		exit();

	}

	public function actualizarJugador() {

		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$numero = $_POST['numero'];
		$nacimiento = $_POST['nacimiento'];

		Jugador::updatePlayer($id, $nombre, $apellidos, $numero, $nacimiento);

		header('Location: ../../');
		exit();		
	}

	public function borrarJugador() {

		$id = $_POST['playerId'];

		Jugador::deletePlayer($id);

		header('Location: ../jugadores');
		exit();
	}

}