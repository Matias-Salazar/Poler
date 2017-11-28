<?php

    class Database {
        private $db;

        public function __construct () {
            $host = 'mysql:host=localhost;dbname=pooler';
            $username = 'root';
            $password = 'root';

            try {
                $this -> db = new PDO($host, $username, $password);

            } catch (PDOException $e) {
                $e -> getMessage ();
            }
        }

        public function connDb () {
            return $this -> db;
        }

    }
