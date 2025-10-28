<?php

namespace AP42\Controllers;
use AP41\Core\EntityManager;
use AP41\Entity\Tareas;
use AP41\Views\DetalleTarea;
use AP41\Views\ListadoTareas;
use AP41\Views\FormularioView;
/**
 * Controlador para la ruta /detalle
 */
class TareasController
{

    public function list()
    {
        $entityManager = (new EntityManager())->getEntityManager();
        $tareas = $entityManager->getRepository(Tareas::class);
        $data = $tareas->findAll();
        $view = new ListadoTareas($data);
    }

    public function detail($id = null)
    {
        $entityManager = (new EntityManager())->getEntityManager();
        $tareas = $entityManager->getRepository(Tareas::class);
        $data = $tareas->find($id);
        $view = new DetalleTarea;
        $this->render($data);
    }
}