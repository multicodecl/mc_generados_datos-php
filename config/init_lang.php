<?php

session_start();

/** Datos para el idiomas */
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es';
} else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == 'es') {
        $_SESSION['lang'] = 'es';
    } else if ($_GET['lang'] == 'en') {
        $_SESSION['lang'] = 'en';
    } else {
        //Default
        $_SESSION['lang'] = 'es';
    }
}

/** Datos para el temas */
if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'light';
}

/** Datos para login */
if (!isset($_SESSION['login']) || !isset($_SESSION['id_usuario']) || !isset($_SESSION['id_tipo_usuario'])) {
    $_SESSION['login'] = false;
    $_SESSION['id_usuario'] = 0;
    $_SESSION['id_tipo_usuario'] = 0;
}

//Test
//$_SESSION['login'] = false;
////require_once "./language/es.php";
//require_once "./language/" . $_SESSION['lang'] . ".php";
require_once(dirname(dirname(__FILE__)) . '\\language\\' . $_SESSION['lang'] . '.php');
