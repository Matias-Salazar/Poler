<?php
    require  ('function.php');
    // obtengo del json todos los usuarios
    $users = file_get_contents ('user.json');
    // Creo un array a partir del json
    $arrayUsers = explode(PHP_EOL,$users);
    // Elimino la ultima posicion dado que esta vacia
    array_pop ($arrayUsers);

    if ($_POST) {
        $errores = [];
        // Validacion username
        if (!checkstring ($_POST['username'],1)) {
            $errores['username'] = 'El campo no puede estar vacio';
        }
        elseif (!filter_var ($_POST['username'], FILTER_VALIDATE_EMAIL)) {
            $errores['username'] = 'El mail no es valido';
        }
        // Validacion password
        if(!checkstring ($_POST['password'],1)) {
            $errores['password'] = 'El campo no puede estar vacio';
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
        <div class="grid grid-center form-container login-container">
            <div class="col-5_sm-12_md-12_xs-12 form-wrapper login-wrapper">
            <form action="login.php" method="post">
                <div class="grid">
                    <div class="col grid-spaceBetween">
                    <div class="col-10 form-group" data-push-left="off-1">
                        <div class="form-item">
                            <label for="username"></label>
                            <input type="text" name="username" id="username" placeholder="Email">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <?php if (!empty($errores['username'])) { ?>
                        <p class="error"> <?php echo $errores['username'] ;}?></p>
                    </div>
                    <div class="col-10 form-group" data-push-left="off-1">
                        <div class="form-item">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" placeholder="Contraseña">
                            <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <?php if (!empty($errores['password'])) { ?>
                        <p class="error"> <?php echo $errores['password']; } ?> </p>
                    </div>
                    <div class="grid col-12_x2-12 terms-wrapper">
                        <div class="terms">
                            <input type="checkbox" name="terms">
                            <a href=""><span>Recordarme</span></a>
                        </div>
                        <?php if (!empty($errores['terms'])) { ?>
                        <p class="error"> <?php echo $errores['terms'];
                                } ?></p>
                    </div>
                    <div class="col-8 grid-spaceBetween register-btn" data-push-left="off-2">
                        <input type="submit" value="Entrar" class="btn-principal btn-register">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer class="footer-login">
        <?php require 'footer.php'?>
    </footer>
</body>
</html>
