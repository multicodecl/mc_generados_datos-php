<?php

//Test de variable de sesion lang
echo '' . $_SESSION['lang'];
//Test de get base url
echo '<br>' . base_url();
//Test de get base include
echo '<br>' . dirname(__FILE__) . '\\';
echo '<br>' . dirname(dirname(__FILE__));

echo '<br>' . $_SERVER['DOCUMENT_ROOT'];
echo '<br>' . __DIR__;
