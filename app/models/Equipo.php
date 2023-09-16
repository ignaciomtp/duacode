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


    public function createTeam() {
        $dbs = connect();
        $dbs->ds->create($this->nombre, $this->ciudad, $this->deporte, $this->fecha_creacion);        
    }
    
    public static function allTeams() {
        $dbs = connect();



        return $dbs->ds->getAll();
    }

    public static function getTeam($id) {
        $dbs = connect();
        return $dbs->ds->getOne($id);
    }


    public static function updateTeam($id, $nombre, $ciudad, $deporte, $fecha_creacion){
        $dbs = connect();
        $dbs->ds->update($id, $nombre, $ciudad, $deporte, $fecha_creacion);     
    }


    public static function deleteTeam($id) {
        $dbs = connect();
        $dbs->ds->delete($id);
    }

}