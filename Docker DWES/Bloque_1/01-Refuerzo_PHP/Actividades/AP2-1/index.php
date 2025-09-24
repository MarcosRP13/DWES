<?php
require_once "VehiculoCarrera.php";
require_once "CocheF1.php";
require_once "CocheElectricoF1.php";

// Crear un coche F1
$coche1 = new CocheF1("Ferrari", "SF23", 0, 100, "Antiguo");

// Mostrar estado inicial
echo "<h3>Estado inicial del Coche F1</h3>";
$coche1->mostrarEstado();
echo "Alerones: " . $coche1->getAlerones() . "<br><br>";

// Arrancar el coche
echo "<h3>Arrancando...</h3>";
$coche1->arrancar();
$coche1->mostrarEstado();

// Acelerar con DRS
echo "<h3>Activando DRS</h3>";
$coche1->activarDRS();
$coche1->mostrarEstado();

// Cambiar alerón
echo "<h3>Cambiando alerones...</h3>";
$coche1->setAlerones("Mejorado");
echo "Alerones nuevos: " . $coche1->getAlerones() . "<br><br>";

// Mostrar consumo (usa el método protected)
echo "<h3>Consumo de combustible</h3>";
$coche1->mostrarProtected();

// Detener
echo "<h3>Deteniendo coche...</h3>";
$coche1->detener();
$coche1->mostrarEstado();

echo "<hr>";

// Crear coche eléctrico de F1
$coche2 = new CocheElectricoF1("Mercedes", "EQ Silver Arrow", 0, 50, 200);

echo "<h3>Estado inicial del Coche Eléctrico F1</h3>";
$coche2->mostrarEstado();
echo "Batería: " . $coche2->getBateria() . "<br><br>";

// Arrancar y acelerar
echo "<h3>Arrancando coche eléctrico...</h3>";
$coche2->arrancar();
$coche2->acelerar();
$coche2->mostrarEstado();

// Recargar batería
echo "<h3>Recargando batería...</h3>";
$coche2->recargar();
echo "Batería después de recarga: " . $coche2->getBateria() . "<br>";
?>
