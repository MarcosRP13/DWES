<?php

namespace AP42\Views;

use AP42\Entity\Tareas;

class DetalleTarea
{
    const HTML = __DIR__ . '/../../public/assets/detalle.html';

    /**
     * Renderiza la vista de detalle de tarea.
     * @param Tareas|null $tarea
     * @return void
     */
    public function render(Tareas $tarea = null): void
    {
        require_once self::HTML;
    }

}