<?php
    require_once ('repoUser.php');
    require_once ('validation.php');
    require_once ('function.php');

    class ValidatorRegister extends Validation
    {

        public function __construct () {

        }

        public function validate (array $userData, RepoUser $repo) {

            $errores = [];

            if (strlen ($userData['name']) < 3) {
                $errores['name'] = 'El nombre no puede estar vacio y debe tener mas de 3 caracteres';
            }
            if (strlen ($userData['lastname']) < 3) {
                $errores['lastname'] = 'El nombre no puede estar vacio y debe tener mas de 3 caracteres';
            }
            if (!filter_var ($userData['email'], FILTER_VALIDATE_EMAIL)) {
                $errores['email'] = 'El formato de email es incorrecto y no puede estar vacio';
            } elseif ($repo -> getUserByEmail ($userData['email']) == true) {
                $errores['email'] = 'El mail ya esta registrado';
            }
            if (!checkPass ($userData['password'])) {
                $errores['pass'] = 'La contraseña debe tener mas de 8 caracteres, contener letras y numeros, mayusculas y minusculas';
            }
            if (!checkPass ($userData['pass-confirm']) && $userData['pass-confirm'] !== $userData['password']) {
                $errores['passConfirm'] = 'La contraseñas deben coincidir, debe tener mas de 8 caracteres, contener letras y numeros y mayusculas y minusculas';
            }
            if (checkAge ($userData['year'], $userData['month'], $userData['day']) < 18) {
                $errores['date'] = 'Tenes que ser mayor de edad para poder registrarte';
            }
            if (!isset($_POST['terms'])) {
                $errores['terms'] = 'Debes aceptar los terminos y condiciones de uso';
            }
            return $errores;
        }
    }
