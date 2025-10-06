<?php
require_once __DIR__ . '/../models/Tarea.php';
require_once __DIR__ . "/../views/ListadoTareas.php";
class TareasController
{

    public function showTareas() {
        $tarea = new Tarea();
        $tareas = $tarea->getData();
        $vistaTareas = new ListadoTareas();
        $vistaTareas->render();

    }
}
