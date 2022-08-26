<?php
require_once('./car.php');
require_once('./account.php');
require_once('./uberX.php');
require_once('./uberPool.php');
require_once('./uberVan.php');

echo "<h1>" . "PRORGRAMACION ORIENTADA A OBJETOS PROYECTO UBER" . "</h1>";

/* $car = new Car("MAS1233", "Rigoberto Herrera", "RH1235");
$car ->printDataCar(); */

$uberX = new UberX("CVB123", new Account("Rigoberto Herrera", "RH1235"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("TYU567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
$uberPool->setPassenger(4);
$uberPool->printDataCar();

$uberVan = new UberVan("OJO365", new Account("Freddyto Porsisoca", "FP3265"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();