<?php

namespace Controllers;
use Models\Cinema;
use DAO\CinemaDAO;

class CinemaController{
    private $cinemaDao;

    public function __construct() {
        $this->cinemaDao=new CinemaDAO();
    }
    public function add($name,$address,$maxCapacity,$ticketPrice){
        $id=time(); //number of seconds since January 1 1970
        //talvez comprobar si se repiten para agregar
        $newCinema=new Cinema($name,$id,$address,intval($maxCapacity),floatval($ticketPrice));
        $this->cinemaDao->add($newCinema);
        $this->showCinemasList();
    }

    public function modify($name,$id,$address,$maxCapacity,$ticketPrice){
        $this->cinemaDao->modify(new Cinema($name,$id,$address,$maxCapacity,$ticketPrice));
        $this->showCinemasList();
    }

    public function remove($id){
        if ($this->cinemaDao->remove($id)) {
            $this->showCinemasList();
            //fue eliminado
        }
        else{
            echo "no se encontro";
            // no se encontro
        }
    }

    public function showCinemasList(){
        $cinemas=$this->cinemaDao->getAll();
        include VIEWS_PATH."cinema_list.php";
    }

    public function showAddCinema(){
        include VIEWS_PATH."add_cinema.php";
    }

    public function showModifyCinema($id){
        $cinema=$this->cinemaDao->getCinema($id);
        include VIEWS_PATH."modify_cinema.php";
    }

}


?>