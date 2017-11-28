<?php

    function checkPass($pass) {
        if (!strlen ($pass < 8)) {
            return false;
        }
        $regex = '~^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])~m';
        // si no cumple con los requisitos de $regex
        if (!preg_match ($regex, $pass)) {
            return false;
        } else {
            return true;
        }
    }
    // Valida si sos mayor de edad
    function checkAge($year,$month,$day) {
        $year_dif  = date("Y") - $year;
        $month_dif = date("m") - $month;
        $day_dif   = date("d") - $day;
        if ($day_dif < 0 || $month_dif < 0) $year_dif--;
        return $year_dif;
    }
    // Crea array con los datos de usuario
    function toArray($data) {
        return [
            'name' => $_POST['name'],
            'lastname' => $_POST['lastname'],
            'email' => $_POST['email'],
            'pass' => crypt ($_POST['password']),
            'passConfirm' => crypt ($_POST['pass-confirm']),
            'day' => $_POST['day'],
            'month' => $_POST['month'],
            'year' => $_POST['year']
        ];
    }
    // Salva en un json los datos del nuevo usuario
    function saveUser($data) {
        $json = json_encode ($data);
        file_put_contents("user.json", $json . PHP_EOL, FILE_APPEND);
    }


