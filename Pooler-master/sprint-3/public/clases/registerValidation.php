<?php

  class RegisterValidation {

    public function validation ($user){
      // Array donde se guardan errores
       $errores = [];

      if (strlen ($user ['name'] < 3)) {
          $errores['name'] = 'El nombre debe tener mas de 3 caracteres';
      }
      if (strlen ($user['lastName'] < 3)) {
          $errores['lastname'] = 'El apellido debe tener mas de 3 caracteres';
      }
      if (!filter_var ($user ['email'], FILTER_VALIDATE_EMAIL)) {
          $errores['email'] = 'El formato de email es incorrecto';
      }
      if (!checkPass ($user['pass'])) {
          $errores['pass'] = 'La contraseña debe ser de 8 caracteres minimo, contener letras y numeros, mayusculas y minusculas';
      }
      if (!checkPass ($user['passConfirm']) && $user['passConfirm'] !== $úser['pass']) {
          $errores['passConfirm'] = 'La contraseñas no coinciden';
      }
      if (checkAge ($user['year'],$user['month'],$use['day']) < 18) {
          $errores['date'] = 'Tienes que ser mayor de edad para poder registrarte';
      }
      if (!isset($user['terms'])) {
         $errores['terms'] = 'Debes aceptar los terminos y condiciones de uso';
      }
      return $errores;
    }
  }
 ?>
