<?php

require_once "app/services/useDataService.php";

class Jugador {
    private $id;
    private $nombre;
    private $apellidos;
    private $numero;
    private $fecha_nacimiento;

    function __construct($nombre, $apellidos, $numero, $fecha_nacimiento) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->numero = $numero;
        $this->fecha_nacimiento = $fecha_nacimiento;
        
    }

    public static function getPlayersByTeam($idPlayer) {
        $dbs = connectJugador();

        return $dbs->getAllFromTeam($idPlayer);
    }

    public static function allPlayers() {
        $dbs = connectJugador();
        return $dbs->getAll();
    }


    public function createPlayer() {
        $dbs = connectJugador();
        $dbs->create($this->nombre, $this->apellidos, $this->numero, $this->fecha_nacimiento);        
    }
    

    public static function getPlayer($id) {
        $dbs = connectJugador();
        return $dbs->getOne($id);
    }


    public static function updatePlayer($id, $nombre, $apellidos, $numero, $fecha_nacimiento){
        $dbs = connectJugador();
        $dbs->update($id, $nombre, $apellidos, $numero, $fecha_nacimiento);     
    }


    public static function deletePlayer($id) {
        $dbs = connectJugador();
        $dbs->delete($id);
    }


}