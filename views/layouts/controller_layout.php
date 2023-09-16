<?php

if (isset($path_opcion) && $path_opcion != '') {
    //var_dump($path_opcion);
    include_once($path_opcion);
} else {
    die('Error al cargar la opción <strong>.' . $opcion .
            ' No existe el archivo ' . $conf[$opcion]['archivo'] . '</strong>');
}