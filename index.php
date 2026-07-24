<?php


class Car{
    public string $brand;
    public string $color;

    public function outMethod() : string {
        return "Машина " . $this -> brand . " с цветом " . $this -> color . " был здесь !" ; 
    }

}

$myCar = new Car();

$myCar -> brand = "Tayota";
$myCar -> color = "white";

echo $myCar->outMethod();
echo "\n";
