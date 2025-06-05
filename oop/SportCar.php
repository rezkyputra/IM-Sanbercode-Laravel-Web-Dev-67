<?php
require_once("Car.php");

class SportCar extends Car
{
    public $fuel = "listrik";
    public function jalan($nilai)
    {
        return "Mobil berjalan sejauh $nilai km <br>";
    }
}

?>