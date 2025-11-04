<?php

require_once __DIR__ . "/../core/Database.php";
class Tarea
{
    public function __construct()
    {

    }

    public function getData()
    {
        $conn = DatabaseConnection::getInstance();
        $conn->executeSQL("SELECT * FROM tareas");
    }
}