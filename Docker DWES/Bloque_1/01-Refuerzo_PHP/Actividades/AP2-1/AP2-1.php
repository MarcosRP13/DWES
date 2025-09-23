<?php

Class VehiculoCarrera {
    protected $marca;
    protected $modelo;
    protected $velocidad;
    protected $combustible;

    public function __construct($marca, $modelo, $velocidad, $combustible) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->combustible = $combustible;
    }

    public function __destruct() {
        echo "El coche se ha retirado de la carrera" . "<br>";
    }
     public function getMarca() {
         return $this->marca;
     }

     public function getModelo() {
        return $this->modelo;
    }

     public function getVelocidad() {
        return $this->velocidad;
     }

     public function getCombustible() {
        return $this->combustible;
     }
     public function setModelo($modelo) {
        $this->modelo = $modelo;
     }

     public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
     }

     public function setCombustible($combustible) {
        $this->combustible = $combustible;
     }

     protected function consumirCombustible(){
        if($this->velocidad > 0) {
            $combustible = $this->combustible;
            $combustibleRestante = ($this->velocidad / 50) * 2 - $combustible;
        }

        echo "El combustible restante es: " . "$combustibleRestante" . "<br>";
     }

     public function arrancar() {
        if($this->velocidad === 0) {
            $this->velocidad = $this->velocidad + 10;
        }
     }

     public function acelerar() {
        $this->velocidad = $this->velocidad + 20;
     }

     public function detener() {
        $this->velocidad = 0;
     }

     public function mostrarEstado() {
        echo "El estado del vehiculo es: " . "$this->marca, " .
             "$this->modelo, " .
             " $this->velocidad " .
             " $this->combustible" . "<br>";
     }

}