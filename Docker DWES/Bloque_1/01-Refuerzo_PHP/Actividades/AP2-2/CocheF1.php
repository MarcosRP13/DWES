<?php

Class CocheF1 extends VehiculoCarrera {

    private
        $alerones;

        public
        function __construct($marca, $modelo, $velocidad, $combustible, $alerones)
        {
            parent::__construct($marca, $modelo, $velocidad, $combustible);
            $this->alerones = $alerones;
        }

        public
        function getAlerones()
        {
            return $this->alerones;
        }

        public
        function setAlerones($alerones)
        {
            $this->alerones = $alerones;
        }

        public
        function activarDRS()
        {
            for ($i = 0; $i < 10; $i++) {
                $this->acelerar();
                echo "La velocidad esta aumentando: " . $this->getVelocidad() . "<br>";
            }
        }
    }