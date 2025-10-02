<?php

require_once __DIR__ . '/../src/models/Model.php';
require_once __DIR__ . '/../src/views/View.php';
require_once __DIR__ . '/../src/controllers/Controller.php';

$controller = new Controller();
$controller->index();

