<?php

namespace Models;

class Room
{
    private $id;
    private $capacity;
    private $ticketPrice;
    private $description;


    public function __construct($id,$capacity,$ticketPrice,$description)
    {
        $this->id = $id;
        $this->capacity = $capacity;
        $this->ticketPrice = $ticketPrice;
        $this->description = $description;
    }


    
    public function getId(){return $this->id;}
    public function getCapacity(){return $this->capacity;}
    public function getTicketPrice(){return $this->ticketPrice;}
    public function getDescription(){return $this->description;}

    public function setId ($id){$this->id = ($id);}
    public function setCapacity ($capacity) {$this->capacity = $capacity;}
    public function setTicketPrice ($ticketPrice) {$this->ticketPrice = $ticketPrice;}
    public function setDescription ($description) {$this->description = $description;}
    
    
    
}