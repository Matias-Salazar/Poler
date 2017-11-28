<?php
    require_once  ('function.php');
    require_once ('classes/repositoryUserSQL.php');
    require_once ('classes/validationLogin.php');
    // obtengo del json todos los usuarios
    $users = file_get_contents ('user.json');
    // Creo un array a partir del json
    $arrayUsers = explode(PHP_EOL,$users);
    // Elimino la ultima posicion dado que esta vacia
    array_pop ($arrayUsers);

    $repoUser = new RepositoryUserSQL();

    if ($_POST) {
        $validate = new ValidationLogin();
        $errores = $validate->validate ($_POST,$repoUser);
    }

    var_dump ($errores);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'meta-head.php'?>
  <title>Login</title>
</head>
<body>
    <header>
        <nav class="grid">
            <div class="col-1_xs-1 logo"><a href="index.php"><img class="img-responsive" src="assets/logo-pooler.png" alt="logo"></a></div>
            <ul class="col-7_xs-11 menu">
                <li><a class="nav-link" href="index.php#hero">¿Qué es?</a></li>
                <li><a class="nav-link" href="index.php#how-works">¿Cómo funciona?</a></li>
                <li><a class="nav-link" href="index.php#faq">Faq</a></li>
            </ul>
            <div class="col-4_xs-12 nav-buttons">
                <a href="register.php"><button class="btn-principal register-btn">Registrate</button></a>
                <a href="login.php"><button class="btn-secondary">Ingresa</button></a>
            </div>
        </nav>
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
                    <div class="col-8 grid-spaceBetween register-btn" data-push-left="off-2">
                        <input type="submit" value="Entrar" class="btn-principal btn-register">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer class="footer-login">
        <div class="col-10" data-push-left="off-1">
            <h4 class="copyright">&#9400 2017 <span class="logo-color-principal">Pooler</span></h4>
        </div>
    </footer>
</body>
</html>