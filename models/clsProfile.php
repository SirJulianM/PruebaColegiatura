<?php

require_once("clsDBConnection.php");

class Profile
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

    function ShowProfile()
    {
        $str_query = "SELECT int_id_perfiles, var_perfiles, bin_activo FROM perfiles ORDER BY var_perfiles ASC";
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

    function InsertProfile($var_perfiles)
    {
        $str_query = "INSERT INTO perfiles(var_perfiles, bin_activo) 
        VALUES (?, ?)";
        $query = $this->link->prepare($str_query);
        $values = array($var_perfiles, true);
        $query->execute($values);
        $count = $query->rowCount();
        return $count;
    }

    function UpdateProfile($var_perfiles, $int_id_perfiles)
    {
        $str_query = "UPDATE perfiles SET var_perfiles = ?
        WHERE int_id_perfiles = ?";
        $query = $this->link->prepare($str_query);
        $values = array($var_perfiles, $int_id_perfiles);
        $query->execute($values);
        $count = $query->rowCount();
        return $count;
    }

    function DeleteProfile($int_id_perfiles)
    {
        $str_query = "UPDATE perfiles SET bin_activo = NOT bin_activo WHERE int_id_perfiles = ?";
        $query = $this->link->prepare($str_query);
        $values = array($int_id_perfiles);
        $query->execute($values);
        $count = $query->rowCount();
        return $count;
    }
}