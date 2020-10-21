<?php

    namespace Controllers;
    use Models\Movie;
    use DAO\MovieDAO;
    use Controllers\GenreController;


    class MovieController{
        private $movieDao;
    
        public function __construct() {
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

        }

        public function showMoviesList(){
            $cinemas=$this->movieDao->getAll('popular');
            include VIEWS_PATH."movies_list.php";
        }
    
    }
?>
