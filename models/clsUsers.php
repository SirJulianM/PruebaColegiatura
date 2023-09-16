<?php

require_once('clsDBConnection.php');

class Users 
{
    //Variables

    public $link;

    //Constructor

    function __construct()
    {
        $db_connection = new DBConnection();
        $this->link = $db_connection->connect();
        return $this->link;
    }

    //Métodos

    function loginUser($usuario, $clave)
    {
        $str_query = "SELECT var_usuario, int_fk_id_perfil FROM usuarios WHERE var_usuario=? AND var_clave=?";
        $query = $this->link->prepare($str_query);
        $values = array($usuario,$clave);
        $query->execute($values);
        $counts=$query->rowCount();
        if ($counts != 0) {
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results[0];
        } else {
            return $counts;
        }
    }
}

