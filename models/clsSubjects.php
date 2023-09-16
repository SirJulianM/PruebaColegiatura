<?php

require_once("clsDBConnection.php");

class Subjects
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

    function ShowSubject()
    {
        $str_query = "SELECT int_id_materia, var_materias, var_descripcion, bin_activo FROM materias ORDER BY var_materias ASC";
        $query = $this->link->prepare($str_query);
        $query->execute();
        if($query->rowCount()>=1)
        {
            $rs = $query->fetchAll(PDO::FETCH_ASSOC);
            return $rs;
        } 
        else
        {
            return 0;
        }
    }

    function InsertSubject($var_materias, $var_descripcion)
    {
        $str_query = "INSERT INTO materias(var_materias, var_descripcion, bin_activo) 
        VALUES (?, ?, ?)";
        $query = $this->link->prepare($str_query);
        $values = array($var_materias, $var_descripcion, true);
        $query->execute($values);
        $count = $query->rowCount();
        return $count;
    }

    function UpdateSubject($var_materias, $var_descripcion, $id_subject)
    {
        $str_query = "UPDATE materias SET var_materias = ?, var_descripcion = ? 
        WHERE int_id_materia = ?";
        $query = $this->link->prepare($str_query);
        $values = array($var_materias, $var_descripcion, $id_subject);
        $query->execute($values);
        $count = $query->rowCount();
        return $count;
    }

    function DeleteSubject($id_subject)
    {
        $str_query = "UPDATE materias SET bin_activo = NOT bin_activo WHERE int_id_materia = ?";
        $query = $this->link->prepare($str_query);
        $values = array($id_subject);
        $query->execute($values);
        $count = $query->rowCount();
        return $count;
    }
}


