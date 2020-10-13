<?php

    namespace Controllers;
    use Models\Movie;
    use DAO\MoviedbDAO as MoviedbDAO;

    class MovieController{
        private $moviedbDao;
    
        public function __construct() {
<<<<<<< Updated upstream
            $this->moviedbDao = new MoviedbDAO();
=======
            $this->movieDao = new MovieDAO();
        }
        
        public function searchByName($name)
        {
            $moviesFinded=$this->movieDao->searchByName($name);
            return $moviesFinded;
        }

        private function getByGenre($genreArray){
            return $this->movieDao->getByGenre($genreArray);
        }

        public function updateNowPlaying(){
            $this->movieDao->updateNowPlaying();
            $this->showMoviesList();
>>>>>>> Stashed changes
        }

        public function showMoviesList(){
            $cinemas=$this->moviedbDao->getAll('popular');
            include VIEWS_PATH."movies_list.php";
        }
        public function showHomeList()
        {
            $cinemas=$this->moviedbDao->getAll('popular');
            include VIEWS_PATH."home_page.php";
        }
    
        public function searchByName($name)
        {
            $moviesFinded=$this->moviedbDao->searchByName($name);
            return $moviesFinded;
        }
    }
?>
