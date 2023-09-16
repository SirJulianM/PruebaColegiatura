<?php

header('Content-Type: application/json');
require_once('models/clsProfile.php');

$profile = new Profile();
$task = (isset($_GET['accion'])) ? $_GET['accion']: 'listar-perfiles';
$data = array();
unset($task);

foreach ($_POST as $key => $valor) 
{
    $$key = addslashes(trim($valor));
}

foreach ($_GET as $key => $valor) 
{
    $$key = addslashes(trim($valor));
}

if(!isset($task))
{
    exit();
}

//var_dump($task);

switch ($task) 
{
    case 'listar-perfiles':
        $listar = $profile->ShowProfile();
        if($listar != 0)
        {
            echo json_encode($listar);
        } 
        else 
        {
            $data["success"] = false;
            echo json_encode($data);
        }
        break;
    
    case 'agregar-perfiles':
        $agregar = $profile->InsertProfile($var_perfiles);
        if($agregar)
        {
            echo json_encode($agregar);
        }
        else
        {
            $data["success"] = false;
            echo json_encode($data);
        }
        break;

    case 'modificar-perfiles':
        $modificar = $profile->UpdateProfile($var_perfiles, (int)$int_id_perfiles);
        if($modificar)
        {
            echo json_encode($modificar);
        }
        else
        {
            $data["success"] = false;
            echo json_encode($data);
        }
        break;
    
    case 'desactivar-perfil':
        $desactivar = $profile->DeleteProfile($int_id_perfiles);
        if($desactivar)
        {
            echo json_encode($desactivar);
        }
        else
        {
            $data["success"] = false;
            echo json_encode($data);
        }
        break;
}