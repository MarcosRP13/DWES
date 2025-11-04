<?php

Class CocheElectricoF1 extends VehiculoCarrera {

    private $bateria;

    public function __construct($marca, $modelo, $velocidad, $combustible, $bateria) {
        parent::__construct($marca, $modelo, $velocidad, $combustible);
    }

    public function getBateria() {
        return $this->bateria;
    }

    public function setBateria($bateria) {
        $this->bateria = $bateria;
    }

    public function recargar() {
        $this->bateria = $this->bateria + 100;
    }
}
