<?php
include 'config/init_lang.php';
include 'include/base.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        include 'pages/componente/head.php';
        include 'pages/componente/script_head.php';
        ?>
        <link href="<?= base_url() ?>public/css/sign-in.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="text-center">
        <main class="form-signin w-100 m-auto">
            <form>
                <img class="mb-4" src="public/files/favicon/favicon-database-sf.png" alt="Imagen no encontrada" width="72" height="72" />
                <h1 class="h3 mb-3 fw-normal"><?php echo $lang['nav_login_please_signin']; ?></h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput"><?php echo $lang['nav_login_email_address']; ?></label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword"><?php echo $lang['nav_login_password']; ?></label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> <?php echo $lang['nav_login_remember_me']; ?>
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit"><?php echo $lang['nav_login_signin']; ?></button>
                <p class="mt-5 mb-3 text-muted"><?php echo $lang['footer_copyright_01']; ?></p>
            </form>
        </main>
    </body>
</html>
