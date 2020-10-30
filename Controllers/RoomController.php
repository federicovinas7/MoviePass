<?php

namespace Controllers;
use DAO\RoomDAO;

class RoomController{
    private $roomDao;

    public function __construct() {
        $this->roomDao = new RoomDAO();
    }

    /**
     * agrega la habitacion, necesita la id del cine al que lo va a agregar
     */
    public function add($room,$cinemaId){
        $this->roomDao->add($room,$cinemaId);
    }

    /**
     * una sala en especifico
     */
    public function getById($id){
        return $this->roomDao->getById($id);
    }

    /**
     * todas las salas de un cine
     */
    public function getArrayByCinemaId($cinemaId){
        return $this->roomDao->getArrayByCinemaId($cinemaId);
    }
}

?>