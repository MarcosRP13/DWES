<?php

namespace AP41\Controllers;

use AP41\Core\EntityManager;
use AP41\Views\DetalleTarea;
use AP41\Views\ListadoTareas;
use AP41\Entity\task;

/**
 * Controlador para la ruta /detalle
 */
class TareasController
{

    public function list()
    {
        $entityManager = (new EntityManager())->getEntityManager();
        $tareas = $entityManager->getRepository(task::class)->findAll();
        $views = new ListadoTareas;
        $views->render($tareas);
    }

    public function detail($id = null)
    {
        $entityManager = (new EntityManager())->getEntityManager();
        $tareas = $entityManager->getRepository(task::class)->find($id);
        $view = new DetalleTarea;
        $view->render($tareas);
    }
}