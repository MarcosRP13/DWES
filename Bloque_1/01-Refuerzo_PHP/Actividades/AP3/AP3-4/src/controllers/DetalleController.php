<?php

namespace AP34\controllers;
use AP34\Models\MainModel;
use AP34\Views\DetalleViews;

class DetalleController {

    public function detail($id = null) {
        $detail = new MainModel();
        $detailUno = $detail->buscarID();
        $detail1 = new DetalleViews($detailUno);
    }
}