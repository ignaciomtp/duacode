<?php

require_once "dataServiceInterface.php";

class JugadoresDataService implements dataServiceInterface {
	private $conn;
	private $sql;

	public function __construct() {
		$this->conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
	}

	public function getAll() {
		$this->sql = "SELECT J.id, J.nombre, J.apellidos, J.numero, J.fecha_nacimiento, E.nombre AS equipo FROM jugadores J LEFT JOIN equipos E ON J.id_equipo = E.id";

                $s = $this->conn->prepare($this->sql);
                $s->execute();
                $this->conn = null;
                return $s->fetchAll();
	}

        public function getAllFromTeam($idTeam) {
                $this->sql = "SELECT * FROM jugadores WHERE id_equipo = $idTeam";

                $s = $this->conn->prepare($this->sql);
                $s->execute();
                $this->conn = null;
                return $s->fetchAll();
            }

	public function getOne($id) {
                $this->sql = "SELECT * FROM jugadores WHERE id = $id";
                
                $s = $this->conn->prepare($this->sql);
                $s->execute();
                $this->conn = null;
                return $s->fetch();		
	}

	public function create($nombre, $apellidos, $numero, $fecha_nacimiento) {
                $this->sql = "INSERT INTO jugadores (nombre, apellidos, numero, fecha_nacimiento) VALUES "
                        . "(:nom, :ciu, :dep, :fec)";
                
                $s = $this->conn->prepare($this->sql);
                $s->bindValue(":nom", $nombre);
                $s->bindValue(":ciu", $apellidos);
                $s->bindValue(":dep", $numero);
                $s->bindValue(":fec", $fecha_nacimiento);
                
                $s->execute();

                $idPlayer = $this->conn->lastInsertId();	

                return $idPlayer;	
	}

	public function update($id, $nombre, $apellidos, $numero, $fecha_nacimiento) {

                $this->sql = "UPDATE jugadores SET nombre = :nom, apellidos = :ciu, numero = :dep, fecha_nacimiento = :fec WHERE id = $id";

                $s = $this->conn->prepare($this->sql);
                $s->bindValue(":nom", $nombre);
                $s->bindValue(":ciu", $apellidos);
                $s->bindValue(":dep", $numero);
                $s->bindValue(":fec", $fecha_nacimiento);
                
                $s->execute();
                  
	}

        public function updatePlayerTeam($id, $idTeam) {
                $this->sql = "UPDATE jugadores SET id_equipo = :idq WHERE id = $id";
                $s = $this->conn->prepare($this->sql);
                $s->bindValue(":idq", $idTeam);
                $s->execute();
                
                $this->conn = null;    
        }

        public function updatePlayerCaptain($id, $captain) {
                $this->sql = "UPDATE jugadores SET capitan = :cap WHERE id = $id";
                $s = $this->conn->prepare($this->sql);
                $s->bindValue(":cap", $captain);
                $s->execute();  
        }

	public function delete($id) {
		$this->sql = "DELETE FROM jugadores WHERE id=$id";

                $s = $this->conn->prepare($this->sql);
                $s->execute();
                
                $this->conn = null;     
	}

}