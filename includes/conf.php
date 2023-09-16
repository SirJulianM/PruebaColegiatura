<?php

define('DEFAULT_VIEW', 'vlogin');
define('DEFAULT_LAYOUT', 'layout.php');
define('VIEW_LAYOUT', 'view_layout.php');
define('CONTROLLER_LAYOUT', 'controller_layout.php');


//Definición de rutas
define('PATH_VIEWS', realpath('views'));
define('PATH_LAYOUTS', realpath('views/layouts'));
define('PATH_CONTROLLERS', realpath('controllers'));
define('DS', DIRECTORY_SEPARATOR);

/* --------------------------------------------- Public area ------------------------------------------------------- */
$conf["vlogin"] = array("modulo" => "mod_seguridad", 'archivo' => "login", "layout"  => DEFAULT_LAYOUT);
$conf["clogin"] = array("modulo" => "mod_seguridad", 'archivo' => "login", "layout"  => CONTROLLER_LAYOUT);

/* ----------------------------------------------------------------------------------------------------------------- */

/* --------------------------------------------- Private area ------------------------------------------------------- */
$conf["vhome-app"] = array("modulo" => "mod_sistema", 'archivo' => "home-app", "layout"  => VIEW_LAYOUT);
$conf["vmaterias"] = array("modulo" => "mod_colegiatura", 'archivo' => "materias", "layout"  => VIEW_LAYOUT);
$conf["cmaterias"] = array("modulo" => "mod_colegiatura", 'archivo' => "materias", "layout"  => CONTROLLER_LAYOUT);
$conf["vestudiantes"] = array("modulo" => "mod_colegiatura", 'archivo' => "estudiantes", "layout"  => VIEW_LAYOUT);
$conf["cestudiantes"] = array("modulo" => "mod_colegiatura", 'archivo' => "estudiantes", "layout"  => CONTROLLER_LAYOUT);

// Administración
$conf["vadmin"] = array("modulo" => "mod_rectora", 'archivo' => "admin", "layout" => VIEW_LAYOUT);
$conf["cadmin"] = array("modulo" => "mod_rectora", 'archivo' => "admin", "layout" => CONTROLLER_LAYOUT);

// Seguridad
$conf["vperfil"] = array("modulo" => "mod_cerverus", 'archivo' => "perfiles", "layout" => VIEW_LAYOUT);
$conf["cperfil"] = array("modulo" => "mod_cerverus", 'archivo' => "perfiles", "layout" => CONTROLLER_LAYOUT);
$conf['vusuarios'] = array("modulo" => "mod_cerverus", 'archivo' => 'usuarios', "layout" => VIEW_LAYOUT);
$conf['cusuarios'] = array("modulo" => "mod_cerverus", 'archivo' => 'usuarios', "layout" => CONTROLLER_LAYOUT);
/* ----------------------------------------------------------------------------------------------------------------- */

