<?php


if(!isset($_SESSION['user']) && !isset($_SESSION['profile'])){
    exit();
}


require_once 'includes/header_app.php';

require_once 'includes/menu_ppal.php';

if (isset($path_opcion) && $path_opcion != '') {
    //var_dump($path_opcion);
    include_once($path_opcion);
} else {
    die('Error al cargar la opción <strong>.' . $opcion .
            ' No existe el archivo ' . $conf[$opcion]['archivo'] . '</strong>');
}

require_once 'includes/menu_sec.php';

require_once 'includes/footer_app.php';