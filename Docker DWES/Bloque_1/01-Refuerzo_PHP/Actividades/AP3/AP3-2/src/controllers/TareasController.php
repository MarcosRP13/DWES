<?php
require_once __DIR__ . '/../models/Tarea.php';

class TareasController
{

    public function index()
    {
        $tarea1 = new Tarea();
        $tareas = $tarea1->showTareas();
        require_once __DIR__ . '/../views/ListadoTareas.php';
    }
}
