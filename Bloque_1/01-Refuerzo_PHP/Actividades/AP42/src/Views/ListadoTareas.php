<?php

namespace AP42\Views;

class ListadoTareas
{
    const HTML = __DIR__ . '/../../public/assets/tareas.html';

    /**
     * Renderiza la vista de listado de tareas.
     * @param array|null $tareas
     * @return void
     */
    public function render(array $tareas = null): void
    {
        require_once self::HTML;
    }

}