<?php
require_once('Car.php');
require_once('SportCar.php');

// Object Car
$avanza = new Car("avanza");
echo "Merk Kendaraan : " . $avanza->merk . "<br>";
echo "Bahan Bakar Kendaraan : " . $avanza->fuel . "<br>";
echo "Jumlah Ban Kendaraan : " . $avanza->tires . "<br>";

echo "------------------<br>";

// Object Turunan
$tesla = new SportCar("tesla");
echo "Merk Kendaraan : " . $tesla->merk . "<br>";
echo "Bahan Bakar Kendaraan : " . $tesla->fuel . "<br>";
echo "Jumlah Ban Kendaraan : " . $tesla->tires . "<br>";
echo $tesla->jalan(200);
?>