<?php

//Nota: Definir vacia para web hosting
define('BASE_URL', 'http://localhost:8090/_multicode/web/mc_generados_datos-php/');

function base_url() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
    $baseURL = "";
    if (!empty(BASE_URL)) {
        $baseURL = BASE_URL;
    } else {
        $baseURL = $protocol . $_SERVER['HTTP_HOST'];
    }

    return $baseURL;
}
