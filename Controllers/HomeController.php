<?php 

namespace Controllers;
use Controllers\CinemaController;
use DAO\MoviedbDAO;

class HomeController{

    public function showCinemasList(){
        $cinemaController=new CinemaController();
        $cinemaController->showCinemasList();
    }
}

?>