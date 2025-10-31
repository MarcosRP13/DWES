<?php

namespace AP42\Controllers;

use AP42\Core\EntityManager;
use AP42\Entity\operations;
use AP42\Views\operationsView;

/**
 * Controlador para la ruta /detalle
 */
class operationsController
{

    public function list()
    {
        $entityManager = (new EntityManager())->getEntityManager();
        $operations = $entityManager->getRepository(operations::class)->findAll();
        $views = new operationsView();
        $views->render($operations);
    }

    public function home(){
        echo "<h1>Inicio</h1><br>";
        echo "<a href='/operaciones'> operaciones </a> <br><br>";
        echo "<a href='/usuarios'> usuarios </a> <br><br>";
    }
}