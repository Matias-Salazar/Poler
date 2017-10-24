<?php
    require 'function.php';
    //*********************** Validacion de datos ***************************//
    if ($_POST) {
        //variables con todos los POST
        $name = $_POST['name'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = password_hash ($_POST['password'], PASSWORD_DEFAULT);
        $passConfirm = password_hash($_POST['pass-confirm'], PASSWORD_DEFAULT);
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $terms = $_POST['terms'];
        $submit = $_POST['submit'];
        // Array donde se guardan errores
         $errores = [];
        if (!checkstring ($name, 3)) {
            $errores['name'] = 'El nombre no puede estar vacio y debe tener mas de 3 caracteres';
        }
        if (!checkstring ($lastName, 3)) {
            $errores['lastname'] = 'El apellido no puede estar vacio y debe tener mas de 3 caracteres';
        }
        if (!filter_var ($email, FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = 'El formato de email es incorrecto';
        }
        if (!checkPass ($pass)) {
            $errores['pass'] = 'La contraseña debe tener mas de 8 caracteres, contener letras y numeros, mayusculas y minusculas';
        }
        if (!checkPass ($passConfirm) && $passConfirm !== $pass) {
            $errores['passConfirm'] = 'La contraseñas deben coincidir, debe tener mas de 8 caracteres, contener letras y numeros y mayusculas y minusculas';
        }
        if (checkAge ($year,$month,$day) < 18) {
            $errores['date'] = 'Tienes que ser mayor de edad para poder registrarte';
        }
        if (!isset($terms)) {
           $errores['terms'] = 'Debes aceptar los terminos y condiciones de uso';
        }

        // Guarda los datos en json si no hay errores en el registro
        if (count ($errores) == 0) {
            // Conexion a db
            $dsn = 'mysql:host=localhost;dbname=pooler;
            charset=utf8mb4;port:8889';
            $db_user = 'root';
            $db_pass = 'root';

            try {
                $db = new PDO($dsn, $db_user, $db_pass);
                $stmt = $db->prepare ("INSERT INTO users (name,lastname,email,password,day_birth,month_birth,year_birth) VALUES (:name, :lastname, :email, :password, :day_birth,:month_birth,:year_birth)");

                $stmt->execute (array (
                    ':name' => $name,
                    ':lastname' => $lastName,
                    ':email' => $email,
                    ':password'=> $pass,
                    ':day_birth'=> $day,
                    ':month_birth'=> $month,
                    ':year_birth' => $year
                ));
            }
            catch (PDOException $exception) {
                echo $exception->getMessage ();
                $usuario = newUser ($_POST);
                saveUser ($usuario);
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'meta-head.php'?>
    <title>Login</title>
</head>
<body>
    <header>
        <?php require 'header.php' ?>
    </header>
    <main>
        <div class="grid grid-center form-container">
            <div class="col-5_sm-10_md-10_xs-10 form-wrapper">
                <form action="register.php" method="post" enctype="multipart/form-data">
                <div class="grid">
                    <div class="col grid-spaceBetween">
                    <div class="col form-group form-row">
                        <div class="form-item">
                            <label for="name"></label>
                            <input type="text" name="name" id="name" placeholder="Nombre" value="<?= (isset($_POST['name'])) ? $_POST['name'] :'';?>">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <?php if (!empty($errores['name'])) { ?>
                        <p class="error"> <?php echo $errores['name'];
                                } ?></p>
                    </div>
                    <div class="col form-group form-row">
                        <div class="form-item">
                            <label for="lastname"></label>
                            <input type="text" name="lastname" id="lastname" placeholder="Apellido" value="<?= (isset($_POST['lastname'])) ? $_POST['lastname'] :'';?>">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <?php if (!empty($errores['lastname'])) { ?>
                        <p class="error"> <?php echo $errores['lastname'];
                                } ?></p>
                    </div>
                        </div>
                    <div class="col-12 form-group">
                        <div class="form-item">
                            <label for="email"></label>
                            <input type="email" name="email" id="email" placeholder="Email" value="<?= (isset($_POST['email'])) ? $_POST['email'] :'';?>">
                            <span><i class="fa fa-at" aria-hidden="true"></i></span>
                        </div>
                        <?php if (!empty($errores['email'])) { ?>
                        <p class="error"> <?php echo $errores['email'];
                                } ?></p>
                    </div>
                    <div class="col-12 form-group">
                        <div class="form-item">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" placeholder="Contraseña">
                            <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <?php if (!empty($errores['pass'])) { ?>
                        <p class="error"> <?php echo $errores['pass'];
                                } ?></p>
                    </div>
                    <div class="col-12 form-group">
                        <div class="form-item">
                            <label for="pass-confirm"></label>
                            <input type="password" name="pass-confirm" id="pass-confirm" placeholder="Confirmar contraseña">
                            <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <?php if (!empty($errores['passConfirm'])) { ?>
                        <p class="error"> <?php echo $errores['passConfirm'];
                                } ?></p>
                    </div>
                    <div class="col-12 form-group">
                        <div class="form-item">
                            <h4>Fecha de nacimiento</h4>
                            <p>Debes ser mayor de 18 años para poder registrarte</p>
                            <label for="date"></label>
                            <div class="select-container">
                                <div class="select-wrapper">
                                    <select name="day" class="date-select">
                                        <option value="Dia">Dia</option>
                                        <?php
                                            for ($day = 1; $day <= 31; $day++) {
                                                echo '<option>' . $day . '</option>';
                                            }
                                        ?>
                                    </select>
                                    <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                </div>
                                <div class="select-wrapper">
                                    <select name="month" class="date-select">
                                        <option value="mes">Mes</option>
                                        <?php
                                            for ($month = 1; $month <= 12; $month++) {
                                                echo '<option>' . $month . '</option>';
                                            }
                                        ?>
                                    </select>
                                    <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                </div>
                                <div class="select-wrapper">
                                    <select name="year" class="date-select">
                                        <option value="anio">Año</option>
                                        <?php
                                            for ($year = date ('Y'); $year >= 1900; $year--) {
                                                echo '<option>' . $year . '</option>';
                                            }
                                        ?>
                                    </select>
                                    <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                </div>
                                <?php if (!empty($errores['date'])) { ?>
                                <p class="error"> <?php echo $errores['date'];
                                        } ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="grid col-12_x2-12 terms-wrapper">
                        <div class="terms">
                            <input type="checkbox" name="terms">
                            <a href=""><span>He leído y acepto los términos y condiciones de uso</span></a>
                        </div>
                        <?php if (!empty($errores['terms'])) { ?>
                        <p class="error"> <?php echo $errores['terms'];
                                } ?></p>
                    </div>
                    <div class="col-8 grid-spaceBetween register-btn" data-push-left="off-2">
                        <input type="submit" name="submit" value="<?= (isset($submit) && count ($errores) == 0) ? 'Enviado' :  'Registrate' ; ?>" id="registerBtn" class="<?= (isset($submit) && count ($errores) == 0) ? 'btn-principal-succes' :  'btn-principal' ; ?> btn-register">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer class="footer-register">
        <?php require 'footer.php'?>
    </footer>
</body>
</html>
