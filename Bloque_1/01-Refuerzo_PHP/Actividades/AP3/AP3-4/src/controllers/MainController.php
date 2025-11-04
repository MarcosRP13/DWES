<?php

namespace AP34\controllers;
use AP34\Models\MainModel;
use AP34\Views\MainViews;

class MainController {

    public function main() {
        $objeto = new MainModel();
        $objetoUno = $objeto->getDatos();
        $objeto1 = new MainViews($objetoUno);
    }
}