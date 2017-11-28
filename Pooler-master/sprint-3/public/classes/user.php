<?php
    require_once ('validationRegister.php');

    class User
    {
        private $id;
        private $name;
        private $lastname;
        private $email;
        private $pass;
        private $day_birth;
        private $month_birth;
        private $year_birth;

        public function __construct ($name, $lastname, $email, $password, $day_birth, $month_birth, $year_birth) {
            $this -> name = $name;
            $this -> lastname = $lastname;
            $this -> email = $email;
            $this -> pass = $password;
            $this -> day_birth = $day_birth;
            $this -> month_birth = $month_birth;
            $this -> year_birth = $year_birth;

        }

        // Getters
        public function getName () {
            return $this -> name;
        }

        public function getLastname () {
            return $this -> lastname;
        }

        public function getEmail () {
            return $this -> email;
        }

        public function getPass () {
            return $this -> pass;
        }


        public function setPass ($pass) {
            $this -> pass = password_hash ($pass, PASSWORD_DEFAULT);
        }

        public function getDayBirth () {
            return $this -> day_birth;
        }

        public function getMonthBirth () {
            return $this -> month_birth;
        }

        // Set passwrod hash on pass User
        public function getYearBirth () {
            return $this -> year_birth;
        }

        public function save (RepositoryUserSQL $repoUserSQL) {
            $repoUserSQL -> save ($this);
        }

    }