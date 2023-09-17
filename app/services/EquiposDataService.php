<?php

require_once "dataServiceInterface.php";

class EquiposDataService implements dataServiceInterface {
	private $conn;
	private $sql;

	public function __construct() {
		$this->conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
	}

	public function getAll() {
		$this->sql = "SELECT * FROM equipos";
        
                $s = $this->conn->prepare($this->sql);
                $s->execute();
                $this->conn = null;
                return $s->fetchAll();
	}

	public function getOne($id) {
                $this->sql = "SELECT * FROM equipos WHERE id = $id";
                
                $s = $this->conn->prepare($this->sql);
                $s->execute();
                $this->conn = null;
                return $s->fetch();		
	}

	public function create($nombre, $ciudad, $deporte, $fecha_creacion) {
                $this->sql = "INSERT INTO equipos (nombre, ciudad, deporte, fecha_creacion) VALUES "
                        . "(:nom, :ciu, :dep, :fec)";
                
                $s = $this->conn->prepare($this->sql);
                $s->bindValue(":nom", $nombre);
                $s->bindValue(":ciu", $ciudad);
                $s->bindValue(":dep", $deporte);
                $s->bindValue(":fec", $fecha_creacion);
                
                $s->execute();
                
                $this->conn = null;		
	}

	public function update($id, $nombre, $ciudad, $deporte, $fecha_creacion) {

                $this->sql = "UPDATE equipos SET nombre = :nom, ciudad = :ciu, deporte = :dep, fecha_creacion = :fec WHERE id = $id";

                $s = $this->conn->prepare($this->sql);
                $s->bindValue(":nom", $nombre);
                $s->bindValue(":ciu", $ciudad);
                $s->bindValue(":dep", $deporte);
                $s->bindValue(":fec", $fecha_creacion);
                
                $s->execute();
                
                $this->conn = null;    
	}

	public function delete($id) {
		$this->sql = "DELETE FROM equipos WHERE id=$id";

                $s = $this->conn->prepare($this->sql);
                $s->execute();
                
                $this->conn = null;     
	}


        public function getCaptain($idTeam) {
                $this->sql = "SELECT * FROM jugadores WHERE id_equipo = $idTeam AND capitan = true";

                $s = $this->conn->prepare($this->sql);
                $s->execute();
                $this->conn = null;
                return $s->fetch();                
        }

}