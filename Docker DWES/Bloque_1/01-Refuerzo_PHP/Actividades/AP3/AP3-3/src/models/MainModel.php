<?php

namespace AP33\models;
use AP33\core\DataBase;
use PDO;

Class MainModel {
    private DataBase $db;

    public function __construct() {
        $this->db = DataBase::getInstance();
    }

    public function getDatos() {
        $sql = "SELECT * FROM taeras";
        return $this->db->executeSQL($sql);
    }

    public function buscarID($id) {
        $sql = "SELECT * FROM taeras WHERE id = $id";
        return $this->db->executeSQL($sql);
    }
}