<?php
    require_once ('validation.php');
    require_once ('function.php');
    require_once ('user.php');

    class ValidationLogin extends Validation
    {

        public function validate (Array $data, RepoUser $repo) {
            $errores = [];
            $repoUser = $repo->getRepo ($user);

            if(empty($data['username'])) {
                $errores['username'] = 'El campo no puede estar vacio';
            } elseif (!filter_var ($data['username'],FILTER_VALIDATE_EMAIL)) {
                $errores['username'] = 'El email tiene un formato incorrecto';
            }
            if (empty($data['password'])) {
                $errores['password'] = 'El campo no puede estar vacio';
            }
            if (!$repo->getUserByEmail ($data['username'])) {
                $errores['username'] = 'El usuario ingresado no existe';
            } else {
                if (!password_verify ($data['password'],$repoUser->getPass ())) {
                    $errores['password'] = 'La contraseña no coincide';
                }
            }
            return $errores;
        }
    }