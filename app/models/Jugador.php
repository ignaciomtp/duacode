<?php

require_once "app/services/useDataService.php";

class Jugador {
    private $id;
    private $nombre;
    private $apellidos;
    private $numero;
    private $fecha_nacimiento;
    private $equipo;

    function __construct($nombre, $apellidos, $numero, $fecha_nacimiento, $equipo) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->numero = $numero;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->equipo = $equipo;
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
        $id = $dbs->create($this->nombre, $this->apellidos, $this->numero, $this->fecha_nacimiento);    
        $dbs->updatePlayerTeam($id, $this->equipo);    
    }
    

    public static function getPlayer($id) {
        $dbs = connectJugador();
        return $dbs->getOne($id);
    }


    public static function updatePlayer($id, $nombre, $apellidos, $numero, $fecha_nacimiento, $equipo){
        $dbs = connectJugador();
        $dbs->update($id, $nombre, $apellidos, $numero, $fecha_nacimiento);  
        $dbs->updatePlayerTeam($id, $equipo);    
    }


    public static function deletePlayer($id) {
        $dbs = connectJugador();
        $dbs->delete($id);
    }


}