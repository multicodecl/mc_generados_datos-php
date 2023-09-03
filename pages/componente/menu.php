<nav class="navbar navbar-expand-lg">
    <div class="container-md">
        <a class="navbar-brand" href="<?= base_url() ?>index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database" viewBox="0 0 16 16">
                <path d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313ZM13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A4.92 4.92 0 0 0 13 5.698ZM14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13V4Zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A4.92 4.92 0 0 0 13 8.698Zm0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525Z"></path>
            </svg>
        </a>
        <button style="background: red;" id="btnToggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active"  aria-current="page" href="<?= base_url() ?>pages/inicio.php"><?php echo $lang['nav_inicio']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>pages/colaboracion.php"><?php echo $lang['nav_colaboracion']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>pages/contacto.php"><?php echo $lang['nav_contacto']; ?></a>
                </li>
            </ul>
            <span class="navbar-text">
                <div class="dropdown">
                    <button type="button" class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown">
                        <?php echo $lang['nav_theme']; ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="Dropdown">
                        <li class="dropdown open">
                            <button class="btn" onclick="cambiarTema('light');">
                                <?php echo $lang['nav_theme_light']; ?>
                            </button>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <button class="btn" onclick="cambiarTema('dark');">
                                <?php echo $lang['nav_theme_dark']; ?>
                            </button>
                        </li>
                    </ul>
                </div>
            </span>
            <span class="navbar-text">
                <div class="dropdown">
                    <button type="button" class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown">
                        <?php echo $lang['nav_idiomas']; ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="Dropdown">
                        <li class="dropdown open">
                            <a class="dropdown-item open" href="<?= base_url() ?>index.php?lang=es">
                                <img width="20px" height="15px" src="<?= base_url() ?>public/files/banderas/spain-flag-icon.png" alt="Imagen no encontrada"/>
                                <?php echo $lang['lang_es']; ?>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= base_url() ?>index.php?lang=en">
                                <img width="20px" height="15px" src="<?= base_url() ?>public/files/banderas/united-kingdom-flag-icon.png" alt="Imagen no encontrada"/>
                                <?php echo $lang['lang_en']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </span>
        </div>
    </div>
</nav>
