<?php 

    namespace Controllers;

    use Controllers\CinemaController;
    use Controllers\MovieController as MovieController;
    use DAO\MoviedbDAO as MoviedbDAO;

    class HomeController{

        public function showCinemasList(){
            $cinemaController=new CinemaController();
            $cinemaController->showCinemasList();
        }

        public function showMoviesList(){
            $movieController = new MovieController();
            $movieController->showMoviesList();
        }
        public function showHome()
        {
            $movieController = new MovieController();
            $movieController->showHomeList();
        }

    }

?>