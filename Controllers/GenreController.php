<?php
namespace Controllers;

use DAO\GenreDAO;
use Models\Genre;

class GenreController{
    private $genreDao;

    public function __construct() {
        $this->genreDao = new GenreDAO();
    }

    public function getAll(){
        return $this->genreDao->getAll();
    }
    
    /**
     * convierte array de id en array de objetos
     */
    public function idArrayToObjects($idArray){
        $newArray=array();
        if(!empty($idArray)){
            foreach ($idArray as $value) {
                $newGenre=$this->genreDao->getById($value);
                $newArray[]=$newGenre;
            }
        }
        return $newArray;
    }

    /**
     * convierte el array asociativo a array de objetos
     */
    public function genresArrayToObject($arr){
        $newArray=array();
        foreach ($arr as $value) {
            $newArray[]=new Genre($value["id"],$value["name"]);
        }
        return $newArray;
    }
}
    
?>