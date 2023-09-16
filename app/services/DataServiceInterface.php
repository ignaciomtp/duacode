<?php

interface DataServiceInterface {

	public function getAll();

	public function getOne($id);

	public function create($nombre, $ciudad, $deporte, $fecha_creacion);

	public function update($id, $nombre, $ciudad, $deporte, $fecha_creacion);

	public function delete($id);


}