<?php

    namespace Controllers;
    use Models\Movie;
    use DAO\MoviedbDAO as MoviedbDAO;

    class MovieController{
        private $moviedbDao;
    
        public function __construct() {
            $this->moviedbDao = new MoviedbDAO();
        }

        public function showMoviesList(){
            $cinemas=$this->moviedbDao->getAll('popular');
            include VIEWS_PATH."movies_list.php";
        }
    
        public function searchByName($name)
        {
            $moviesFinded=$this->moviedbDao->searchByName($name);
            return $moviesFinded;
        }
    }
?>
