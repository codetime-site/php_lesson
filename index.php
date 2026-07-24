<?php

declare(strict_types=1);
// parent
class Car{  

    public string $brand;
    public string $color;

    public function __construct( string $brand, string $color ){
        $this -> brand = $brand;
        $this -> color = $color;
    }   
    
    public function outMethod() : string {
        return "Машина " . $this -> brand . " с цветом " . $this -> color . " был здесь !" ; 
    }
}

// Дочерний класс наследует всё от Car 
class Motor extends Car{
   
    public float $motors;

    public function outMotor( ) : string{
        return 'car: ' . $this->brand . ", " . "color: " . $this -> color . ": ". "motor: " . $this -> motors ;
    }

}


$myMotor = new Motor("Tayota", "Black");
$myMotor -> motors = 3.5;
$out = $myMotor -> outMotor();

echo $out ;  
echo "\n";
