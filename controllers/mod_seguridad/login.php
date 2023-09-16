<?php

require_once('models/clsUsers.php');

$usuario = new Users();
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

switch ($task) {

    case 'login':
        $login = $usuario->loginUser($user, $clave);
        if($login != 0){
            $_SESSION['user'] = $login['var_usuario'];
            $_SESSION['profile'] = $login['int_fk_id_perfil'];
            echo '{"success":true}';
        } else {
            echo '{"success":false}';
        }
        break;

}