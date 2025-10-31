<?php

namespace AP42\Views;

use AP42\Entity\operations;

class operationsView
{
    const HTML = __DIR__ . '/../../public/assets/tareas.html';

    /**
     * Renderiza la vista de detalle de tarea.
     * @param operations|null $operations
     * @return void
     */
    public function render($operations = null): void
    {
        require_once self::HTML;
    }

}