<?php
class Car
{
    public $merk;
    public $tires = 4;
    public $fuel = "Bensin";

    public function __construct($string){
        $this->merk = $string;
    }
}

?>