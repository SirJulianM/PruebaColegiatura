<?php

header('Content-Type: application/json');
require_once('models/clsSubjects.php');

$subject = new Subjects();
$task = (isset($_GET['accion'])) ? $_GET['accion']: 'listar-materias';
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
    case 'listar-materias':
        $listar = $subject->ShowSubject();
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
    
    case 'agregar-materias':
        $agregar = $subject->InsertSubject($var_materia, $var_descripcion);
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

    case 'modificar-materias':
        $modificar = $subject->UpdateSubject($var_materia, $var_descripcion, (int)$int_id_materia);
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
    
    case 'desactivar-materias':
        $desactivar = $subject->DeleteSubject($int_id_materia);
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