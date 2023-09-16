<?php 

require_once('clsDBConnection.php');

class Administrator
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

    function ShowButtonsSubjects()
    {
        $str_query = "SELECT int_id_materia, var_materias FROM materias 
        WHERE bin_activo = true ORDER BY var_materias ASC";
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
}