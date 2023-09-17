<?php

require_once "app/services/useDataService.php";

class Jugador {
    private $id;
    private $nombre;
    private $apellidos;
    private $numero;
    private $capitan;
    private $fecha_nacimiento;
    private $equipo;

    function __construct($nombre, $apellidos, $numero, $fecha_nacimiento, $equipo, $capitan = false) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->numero = $numero;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->equipo = $equipo;
        $this->capitan = $capitan;
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
        if($this->capitan) $dbs->updatePlayerCaptain($id, $this->capitan);  
        $dbs->updatePlayerTeam($id, $this->equipo);    
    }
    

    public static function getPlayer($id) {
        $dbs = connectJugador();
        return $dbs->getOne($id);
    }


    public static function updatePlayer($id, $nombre, $apellidos, $numero, $fecha_nacimiento, $equipo, $capitan = false){
        $dbs = connectJugador();
        $dbs->update($id, $nombre, $apellidos, $numero, $fecha_nacimiento);  
        $dbs->updatePlayerCaptain($id, $capitan);  
        $dbs->updatePlayerTeam($id, $equipo);    
    }


    public static function deletePlayer($id) {
        $dbs = connectJugador();
        $dbs->delete($id);
    }


}