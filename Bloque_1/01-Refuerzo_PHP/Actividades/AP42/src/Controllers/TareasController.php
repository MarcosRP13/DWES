<?php

namespace AP42\Controllers;
use AP42\Core\EntityManager;
use AP42\Entity\Tareas;
use AP42\Views\DetalleTarea;
use AP42\Views\ListadoTareas;
use AP42\Views\FormularioView;
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