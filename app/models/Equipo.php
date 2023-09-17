<?php

require_once "app/services/useDataService.php";

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
        
    }

    public static function allTeams() {
        $dbs = connectEquipo();
        return $dbs->getAll();
    }


    public function createTeam() {
        $dbs = connectEquipo();
        $dbs->create($this->nombre, $this->ciudad, $this->deporte, $this->fecha_creacion);        
    }
    

    public static function getTeam($id) {
        $dbs = connectEquipo();
        return $dbs->getOne($id);
    }


    public static function updateTeam($id, $nombre, $ciudad, $deporte, $fecha_creacion){
        $dbs = connectEquipo();
        $dbs->update($id, $nombre, $ciudad, $deporte, $fecha_creacion);     
    }


    public static function deleteTeam($id) {
        $dbs = connectEquipo();
        $dbs->delete($id);
    }

    public static function getTeamCaptain($id) {
        $dbs = connectEquipo();
        return $dbs->getCaptain($id);
    }

}