<?php
    function checkstring($str, $min = false) {
        // Quita espacios en el string
        $str = str_replace (" ", "", $str);
        // si $str no esta vacio
        if (!empty($str)) {
            // si el largo de $str no esta vacio.
            if (!empty($min)) {
                // si el string cumple con el minimo de caracteres en $min.
                if (strlen ($str) >= $min) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function checkPass($pass) {
        if (!checkstring ($pass, 8)) {
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

    function newUser($data) {
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
