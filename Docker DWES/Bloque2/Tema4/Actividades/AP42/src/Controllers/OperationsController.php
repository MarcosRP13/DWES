<?php

namespace AP42\Controllers;

use AP42\Core\EntityManager;
use AP42\Views\DetalleTarea;
use AP42\Views\ListadoTareas;
use AP42\Entity\operations;

/**
 * Controlador para la ruta /detalle
 */
class operationsController
{

    public function list()
    {
        $entityManager = (new EntityManager())->getEntityManager();
        $operations = $entityManager->getRepository(operations::class)->findAll();
        $views = new operations();
        $views->render($operations);
    }
}