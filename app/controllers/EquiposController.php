<?php

require_once 'Controller.php';
require_once "app/models/Equipo.php";


class EquiposController extends Controller {

	public function index() {
		$equipos = Equipo::allTeams();

		$this->view('equipos', ['equipos' => $equipos]);
	}


	public function verEquipo() {

		$path_info = $_SERVER['REQUEST_URI'] ?? '/';

		$uri = explode('/', $path_info);	

		$id = end($uri);

		$equipo = Equipo::verEquipo($id);

		echo "<pre>";
		print_r($equipo);
		echo "</pre>";		

		die();

	}

	public function nuevoEquipo() {

		$this->view('formulario-equipos');
	}

	public function crearEquipo() {


		$nombre = $_POST['nombre'];
		$ciudad = $_POST['ciudad'];
		$deporte = $_POST['deporte'];
		$fundacion = $_POST['fundacion'];

		$equipo = new Equipo($nombre, $ciudad, $deporte, $fundacion);

		header('Location: ../');

	}

}