<?php

namespace AP33\controllers;
use AP33\Models\MainModel;
use AP33\Views\MainViews;

class MainController {

    public function main() {
        $objeto = new MainModel();
        $objetoUno = $objeto->getDatos();
        $objeto1 = new MainViews($objetoUno);
    }
}