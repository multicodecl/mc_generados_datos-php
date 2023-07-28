<?php

session_start();

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

//require_once "./language/es.php";
//require_once "./language/" . $_SESSION['lang'] . ".php";
require_once(dirname(dirname(__FILE__)) . '\\language\\' . $_SESSION['lang'] . '.php');
