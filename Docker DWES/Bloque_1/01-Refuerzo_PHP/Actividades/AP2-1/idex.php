<?php

require_once "AP2-1.php";

$coche1 = New VehiculoCarrera("ford", "focus", 0, "200");

$coche1->arrancar();

$coche1->mostrarEstado();

$coche1->acelerar();

$coche1->mostrarEstado();

$coche1->acelerar();
$coche1->acelerar();
$coche1->acelerar();
$coche1->acelerar();
$coche1->acelerar();
$coche1->acelerar();
$coche1->acelerar();
$coche1->acelerar();

$coche1->mostrarEstado();

$coche1->consumirCombustible();

$coche1->mostrarEstado();


