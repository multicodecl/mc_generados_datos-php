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
    </head>
    <body>
        <div class="container-md">
            <header>
                <?php
                include 'pages/componente/menu.php';
                ?>
                <div class="p-3 pb-md-4 mx-auto text-center">
                    <h1 class="display-4 fw-normal"><?php echo $lang['head_title']; ?></h1>
                    <p class="fs-5 text-muted"><?php echo $lang['head_description']; ?></p>
                </div>
            </header>
            <main>
                Index
            </main>
            <?php
            include 'pages/componente/footer.php';
            include 'pages/componente/script_footer.php';
            ?>
        </div>
    </body>
</html>
