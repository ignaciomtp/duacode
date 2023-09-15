<?php

class Equipo {
    private $id;
    private $nombre;
    private $ciudad;
    private $deporte;
    private $fecha_creacion;

    function __construct($nombre, $ciudad, $deporte, $fecha_creacion) {
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->deporte = $deporte;
        $this->fecha_creacion = $fecha_creacion;
        
        $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        $sql = "INSERT INTO equipos (nombre, ciudad, deporte, fecha_creacion) VALUES "
                . "(:nom, :ciu, :dep, :fec)";
        
        $s = $conn->prepare($sql);
        $s->bindValue(":nom", $nombre);
        $s->bindValue(":ciu", $ciudad);
        $s->bindValue(":dep", $deporte);
        $s->bindValue(":fec", $fecha_creacion);
        
        $s->execute();
        
        $conn = null;
    }
    
    public static function allTeams(){
        $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        $sql = "SELECT * FROM equipos";
        
        $s = $conn->prepare($sql);
        $s->execute();
        $conn = null;
        return $s->fetchAll();
    }
}