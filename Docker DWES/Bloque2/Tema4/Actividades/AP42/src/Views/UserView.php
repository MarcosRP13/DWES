<?php

namespace AP42\Views;

class UserView
{
    const HTML = __DIR__ . '/../../public/assets/tareas.html';

    /**
     * Renderiza la vista de listado de tareas.
     * @param array|null $users
     * @return void
     */
    public function render(array $users = null): void
    {
        require_once self::HTML;
    }

}