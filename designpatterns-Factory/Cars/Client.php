<?php
require_once 'car.php';
require_once 'Indica.php';
require_once 'Sedan.php';
require_once 'Suv.php';
require_once 'carFactory.php';


$carFactory = new CarFactory();

$carSedan = $carFactory->createCar("Sedan");
$carSUV = $carFactory->createCar("SUV");
$carIndica = $carFactory->createCar("Indica");

echo 'Type of the car is: ' . $carSedan->getModel(). "\n";
echo 'Type of the car is: ' . $carSUV->getModel(). "\n";
echo 'Type of the car is: ' . $carIndica->getModel(). "\n";


$sedanFactory = new sedanFactory();
$sedanCar = $sedanFactory->createCar();
echo 'Car type: ' . $sedanCar->getModel(). "\n";

$suvFactory = new suvFactory();
$suvCar = $suvFactory->createCar();
echo 'Car type: ' . $suvCar->getModel()."\n";

$indicaFactory = new indicaFactory();
$indicaCar = $indicaFactory->createCar();
echo 'Car type: '. $indicaCar->getModel(). "\n";
?>
