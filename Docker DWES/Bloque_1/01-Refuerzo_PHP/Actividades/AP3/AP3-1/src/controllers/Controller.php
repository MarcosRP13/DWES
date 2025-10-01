<?php

class Controller {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new Model();
        $this->view  = new View();
    }

    public function index() {
        $data = $this->model->getAll();
        $this->view->render($data);
    }
}
