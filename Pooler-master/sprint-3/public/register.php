<?php
    require_once ('classes/validationRegister.php');
    require_once ('classes/user.php');
    require_once ('classes/repositoryUserSQL.php');
    require_once ('classes/repoUser.php');

    $repoUser = new RepositoryUserSQL();
    //*********************** Validacion de datos ***************************//
    if ($_POST) {
        // Instance for form validation
        $validate = new ValidatorRegister();
        $errores = $validate -> validate ($_POST,$repoUser);
        // Save user if there not errors input
        if (empty($errores)) {
            // Create User instance
            $user = new User($_POST['name'],
                $_POST['lastname'],
                $_POST['email'],
                $_POST['password'],
                $_POST['day'],
                $_POST['month'],
                $_POST['year']
            );

            // Connect and save user in the database
            $user->setPass ($_POST['password']);
            $user->save ($repoUser);

        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'meta-head.php' ?>
    <title>Login</title>
</head>
<body>
    <header>
        <nav class="grid">
            <div class="col-1_xs-1 logo"><a href="index.php"><img class="img-responsive" src="assets/logo-pooler.png"
                                                                  alt="logo"></a></div>
                <ul class="col-7_xs-11 menu">
                    <li><a class="nav-link" href="index.php#hero">¿Qué es?</a></li>
                    <li><a class="nav-link" href="index.php#how-works">¿Cómo funciona?</a></li>
                    <li><a href="index.php#faq">Faq</a></li>
                </ul>
                <div class="col-4_xs-12 nav-buttons ">
                    <a href="register.php"><button class="btn-principal register-btn">Registrate</button></a>
                    <a href="login.php"><button class="btn-secondary">Ingresa</button></a>
                </div>
        </nav>
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
                            <input type="text" name="name" id="name" placeholder="Nombre"
                                   value="<?= (isset($_POST['name'])) ? $_POST['name'] : ''; ?>">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <?php if (!empty($errores['name'])) { ?>
                        <p class="error"> <?php echo $errores['name'];
                                } ?></p>
                    </div>
                    <div class="col form-group form-row">
                        <div class="form-item">
                            <label for="lastname"></label>
                            <input type="text" name="lastname" id="lastname" placeholder="Apellido"
                                   value="<?= (isset($_POST['lastname'])) ? $_POST['lastname'] : ''; ?>">
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
                            <input type="email" name="email" id="email" placeholder="Email"
                                   value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''; ?>">
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
                            <input type="password" name="pass-confirm" id="pass-confirm"
                                   placeholder="Confirmar contraseña">
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
                            <label for="terms"></label>
                            <input type="checkbox" id="terms" name="terms">
                            <a href=""><span>He leído y acepto los términos y condiciones de uso</span></a>
                        </div>
                        <?php if (!empty($errores['terms'])) { ?>
                        <p class="error"> <?php echo $errores['terms'];
                                } ?></p>
                    </div>
                    <div class="col-8 grid-spaceBetween register-btn" data-push-left="off-2">
                        <input type="submit" name="submit"
                               value="<?= (isset($_POST['submit']) && count ($errores) == 0) ? 'Enviado' : 'Registrate'; ?>"
                               id="registerBtn"
                               class="<?= (isset($_POST['submit']) && count ($errores) == 0) ? 'btn-principal-succes' : 'btn-principal'; ?> btn-register">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer class="footer-register">
        <div class="grid_12 footer">
            <div class="col-10" data-push-left="off-1">
                <h4 class="copyright">&#9400 2017 <span class="logo-color-principal">Pooler</span></h4>
            </div>
        </div>
    </footer>
</body>
</html>
