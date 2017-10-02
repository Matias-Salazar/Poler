<?php
    $gestor = fopen ('user.json', 'r');
    fread ($gestor, $json );
    $json = json_decode ($gestor);
    //fclose ($gestor);
    echo $json;
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
                            <input type="text" name="username" id="username" placeholder="usuario">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="col-10 form-group" data-push-left="off-1">
                        <div class="form-item">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" placeholder="Contraseña">
                            <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
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