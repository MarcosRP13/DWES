<?php
// src/models/Model.php
class Model {
    private $data;

    public function __construct() {

        $this->data = array(
            "title" => "MVC Sencillo PHP",
            "keywords" => "arquitectura de software, poo, mvc, php",
            "description" => "Ponemos en práctica el MVC en PHP",
            "content" => "El contenido del presente ejercicio corresponde a la creación de un modelo sencillo mediante el lenguaje de programación PHP de forma sencilla y haciendo uso de los conocimientos previos que tienen los alumnos."
        );
    }

    public function getAll() {
        return $this->data;
    }

    public function get($key) {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }
}
