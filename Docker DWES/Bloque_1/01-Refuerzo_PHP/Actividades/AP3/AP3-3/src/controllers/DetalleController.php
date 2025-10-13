<?php

namespace AP33\controllers;
use AP33\Models\MainModel;
use AP33\Views\DetalleViews;

class DetalleController {

    public function detail($id = null) {
        $detail = new MainModel();
        $detailUno = $detail->buscarID();
        $detail1 = new DetalleViews($detailUno);
    }
}