<?php

namespace DAO;

use Models\Movie;
use DAO\MoviedbDAO;

class MovieDAO{
    private $movies=array();
    private $filename;

    public function __construct() {
        $this->filename = ROOT."/data/movies.json";
    }

    public function add($movie)
    {
        $this->retrieveData();
        $this->movies[]=$movie;
        $this->saveData();
    }

    public function remove($id){
        $this->retrieveData();
        $flag=false;
        $i=0;
        while($flag == false && $i<count($this->movies)){
            if ($id == $this->movies[$i]->getId()) {
                unset($this->movies[$i]);
                $this->saveData();
                $flag=true;
            }
            $i++;
        }
        return $flag;
    }

    public function getAll()
    {
        $this->retrieveData();
        return $this->movies;
    }

    public function updateNowPlaying(){
        $this->retrieveData();
        $movieDB=new MoviedbDAO();
        $num=1;
        $moviesArr=$movieDB->getAll("now_playing",1);
        while($num<=$movieDB->getTotalPages()){
            $moviesArr=$movieDB->getAll("now_playing",$num);
            $num++;
            foreach ($moviesArr as $apiMovie) {
                $bool=false;
                $i=0;
                while ($bool==false && $i<count($this->movies)) {
                    if ($apiMovie->getId()==$this->movies[$i]->getId()) {
                        $bool=true;
                    }
                    $i++;
                }
                if ($bool == false) {
                    $this->movies[]=$apiMovie;
                }
            }
        }
        $this->saveData();
    }

    private function saveData(){
        $toEncode=array();
        foreach ($this->movies as $value) {
            $valueArr["title"]=$value->getTitle();
            $valueArr["id"]=$value->getId();
            $valueArr["length"]=$value->getLength();
            $valueArr["overview"]=$value->getSynopsis();
            $valueArr["poster"]=$value->getPoster();
            $valueArr["genre"]=$value->getGenres();
            $valueArr["release_date"]=$value->getReleaseDate();
            $toEncode[]=$valueArr;
        }
        $jsonContent=json_encode($toEncode,JSON_PRETTY_PRINT);
        file_put_contents($this->filename,$jsonContent);
    }


    private function retrieveData()
    {
        $this->movies=array();
        if (file_exists($this->filename)) {
            $jsonContent=file_get_contents($this->filename);
            $array=($jsonContent)?json_decode($jsonContent,true):array();  
            foreach ($array as $movie) {
                $newMovie=new Movie($movie["title"],$movie["id"],$movie["overview"],$movie["poster"],$movie["length"],$movie["genre"],$movie["release_date"]);
                $this->movies[]=$newMovie;
            }
        }
    }

    public function getByGenre($genre)
    {
        $moviesArray = array();

        $this->getAll();
      
        foreach($this->movies as $movie)
        {
           
            $genres = $movie->getGenres();
            $i = 0;
            $u = 0;
            
            while ($u<count($genre))
            {
                while ($i<count($genres))
                {
                    if($genre[$u] == $genres[$i]["name"])
                    {
                        array_push($moviesArray,$movie);
                    }
                    
                    $i++;
                }
                $u++;
            }
            
        }
                 
        return $moviesArray;
    }
}

?>