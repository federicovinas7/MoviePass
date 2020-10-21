<?php
    namespace Models;

    class User 
    {
        private $email;
        private $password;
        private $firstName;
        private $lastName;
        private $birthdate;


        public function __construct($email,$password,$firstName,$lastName,$birthdate){
            $this->email = $email;
            $this->password = $password;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->birthdate = $birthdate;
        }

    }
?>