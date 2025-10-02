<?php
Class DBConnection{

    private static $instance;

    private $conn;

    private function __construct($host, $user, $pass, $db){
        try {
            $this->conn = new mysqli($host, $user, $pass, $db);
            echo "conexion exitosa<br><br><br>";
        } catch (mysqli_sql_exception $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance($host, $user, $pass, $db) {
        if (self::$instance == null) {
            self::$instance = new DBConnection($host, $user, $pass, $db);
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->conn;
    }
}
