<?php

namespace AP34\views;

class MainViews {
    public function __construct(array $array)
    {
        echo '<table border = 1>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Título</th>';
        echo '<th>Descripción</th>';
        echo '<th>Fecha de Creación</th>';
        echo '<th>Fecha de Vencimiento</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($array as $valor) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($valor['id']) . '</td>';
            echo '<td>' . htmlspecialchars($valor['titulo']) . '</td>';
            echo '<td>' . htmlspecialchars($valor['descripcion']) . '</td>';
            echo '<td>' . htmlspecialchars($valor['fecha_creacion']) . '</td>';
            echo '<td>' . htmlspecialchars($valor['fecha_vencimiento']) . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    }
}