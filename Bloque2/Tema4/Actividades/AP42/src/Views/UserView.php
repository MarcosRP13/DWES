<?php

namespace AP42\Views;

class UserView
{
    const HTML = __DIR__ . '/../../public/assets/detalle.html';

    /**
     * Renderiza la vista de listado de tareas.
     * @param array|null $users
     * @return void
     */
    public function render(array $users = []): void
    {
        require_once self::HTML;
    }

}