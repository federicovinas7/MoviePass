<?php
namespace Models;
use Models\Movie as Movie;

class Projection 
{
    private $id;
    private $movie;
    private $room;
    private $date;
    private $hour;

    public function __construct($id,$movie,$room,$date,$hour)
    {
        $this->id = $id;
        $this->movie = $movie;
        $this->room = $room;
        $this->date = $date;
        $this->hour = $hour;
    }


    public function getId(){return $this->id;}
    public function getMovie(){return $this->movie;}
    public function getRoomId(){return $this->room;}
    public function getDate(){return $this->date;}
    public function getHour(){return $this->hour;}

    public function setMovie($movie){$this->movie = $movie;}
    public function SetId($id){$this->id = $id;}
    public function setRoom($room){$this->room = $room;}
    public function setDate($date){$this->date = $date;}
    public function setHour($hour){$this->hour = $hour;}

    

}