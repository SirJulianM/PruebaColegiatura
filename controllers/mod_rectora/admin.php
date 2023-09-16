<?php 

header('Content-Type: application/json');
require_once('models/clsAdmin.php');

$others = new Administrator();
$task = (isset($_GET['accion'])) ? $_GET['accion']: 'listar-botones';
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
    case 'listar-botones':
        $listar = $others->ShowButtonsSubjects();
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
    
    default:
        # code...
        break;
}