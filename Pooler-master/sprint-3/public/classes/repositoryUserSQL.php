<?php
    require_once ('database.php');
    require_once ('repoUser.php');


    class RepositoryUserSQL extends RepoUser
    {
        // Atribute for db connection
        private $db;

        public function __construct () {
            // Create new Connection
            $this -> db = new Database();
        }

        public function save (User $user) {
            $query = "INSERT INTO users (name,lastname,email,password,day_birth,month_birth,year_birth) 
                      VALUES (:name, :lastname, :email, :password, :day_birth,:month_birth,:year_birth)";

            $this -> db -> connDb () -> prepare ($query) -> execute (array (
                'name' => $user -> getName (),
                'lastname' => $user -> getLastname (),
                'email' => $user -> getEmail (),
                'password' => $user -> getPass (),
                'day_birth' => $user -> getDayBirth (),
                'month_birth' => $user -> getMonthBirth (),
                'year_birth' => $user -> getYearBirth ()
            ));
        }

        public function getUserByEmail ($email) {
            $query = "SELECT * FROM users WHERE email= '" . $email . "'";
            $sql = $this -> db -> connDb () -> prepare ($query);

            $sql -> execute ();
            // if record is found
            if ($sql -> rowCount () > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function getAllUsers () {
            $usersArr = [];

            $query = "SELECT * FROM users";
            $sql = $this -> db -> connDb () -> prepare ($query);
            $sql -> execute ();

            $result = $sql -> fetchAll (PDO::FETCH_ASSOC);

            foreach ($result as $users) {
                $users = new User(
                    $users["id"],
                    $users["name"],
                    $users["lastname"],
                    $users["email"],
                    $users["password"],
                    $users["day_birth"],
                    $users["month_birth"],
                    $users["year_birth"]
                );
                $usersArr[] = $users;
            }

            return $usersArr;
        }
    }
