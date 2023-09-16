<?php

header('Content-Type: application/json');
require_once('models/clsUsersSecurity.php');

$users = new UsersSecurity();
$task = (isset($_GET['accion'])) ? $_GET['accion']: 'listar-usuarios';
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

switch ($task) 
{
    case 'listar-usuarios':
        $listar = $users->showUsers();
        if($listar != 0)
        {
            echo json_encode($listar);
        }
        else
        {
            $data['success'] = false;
            echo json_encode($data);
        }
        break;

    case 'agregar-usuario':
        $agregar = $users->InsertUser($usuario, $id_perfil, $clave, $id_tipo_usuario);
        if($agregar)
        {
            echo json_encode($agregar);
        }
        else
        {
            $data['success'] = false;
            echo json_encode($data);
        }        
        break;

    case 'modificar-usuario':
        $modificar = $users->UpdateUser($usuario, $id_perfil, $clave, $id_tipo_usuario, $id);
        if($modificar)
        {
            echo json_encode($modificar);
        }
        else
        {
            $data['success'] = false;
            echo json_encode($data);
        }
        break;

    case 'deshacer-usuario':
        $deshacer = $users->DeleteUser($id);
        if($deshacer)
        {
            echo json_encode($deshacer);
        }
        else
        {
            $data['success'] = false;
            echo json_encode($data);
        }
        break;
    
    default:
        # code...
        break;
}
