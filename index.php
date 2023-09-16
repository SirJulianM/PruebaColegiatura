<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors','On');

ini_set('memory_limit', '-1');
ignore_user_abort(1);

// Setear Hora en español y la zona horaria
setlocale(LC_TIME, 'es_ES');
date_default_timezone_set('America/Bogota');

// Se incluye archivo de conexión a BD & Archivo de configuración
include_once('models/clsDBConnection.php');
require_once 'includes/conf.php';

//index.php?opc=vlogin
if (!empty($_GET["opc"])) { 
    $opcion = $_GET["opc"]; // &opcion = vlogin
} else {
    $opcion = DEFAULT_VIEW; 
}

if (empty($conf[$opcion])) {
    $opcion = DEFAULT_VIEW;
}

if (empty($conf[$opcion]["layout"])) {
    $conf["layout"] = DEFAULT_LAYOUT;
}

$path_layout = PATH_LAYOUTS . DS;  // views/layouts/

switch ($conf[$opcion]["layout"]) {  // $conf['vlogin']['layout']
    
    case CONTROLLER_LAYOUT:
        $path_layout .= CONTROLLER_LAYOUT;
        $path_opcion = PATH_CONTROLLERS . DS;  
        $path_opcion .= $conf[$opcion]["modulo"] . DS . $conf[$opcion]["archivo"] . ".php";
        break;
    case VIEW_LAYOUT:
        $path_layout .= VIEW_LAYOUT;
        if ($conf[$opcion]["archivo"] != '') {
            $path_opcion = PATH_VIEWS . DS;
            $path_opcion .= $conf[$opcion]["modulo"] . DS . $conf[$opcion]["archivo"] . ".php";
        }
        break;
    case DEFAULT_LAYOUT:
        $path_layout .= DEFAULT_LAYOUT; // views/layouts/layout.php
        $path_opcion =  PATH_VIEWS . DS; // views/mod_seguridad/login.php
        $path_opcion .= $conf[$opcion]["modulo"] . DS . $conf[$opcion]["archivo"] . ".php";  
        break;
}

include $path_layout; // views/layouts/layout.php
