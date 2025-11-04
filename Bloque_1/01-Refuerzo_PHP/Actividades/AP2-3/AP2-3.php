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

$host = "mariadb-server";
$user = "root";
$pass = "root";
$db = "AP1";

$db1 = DBConnection::getInstance($host, $user, $pass, $db);
$db2 = DBConnection::getInstance($host, $user, $pass, $db1);

var_dump($db1 === $db2);

$conn = $db1->getConnection();

try {
    $sql = "SELECT * FROM usuarios";
    $resultado = $conn->query($sql);
    while ($row = $resultado->fetch_assoc()) {
        echo "Usuario: " . $row["nombre"] . "<br>" .
            " ID: " . $row["id"] . "<br>" .
            " Estado: " . $row["estado"] . "<br>";
        echo "----------------------<br>";
    }
} catch (mysqli_sql_exception $e) {
    die($e->getMessage());
}

