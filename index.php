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

    public function __construct(string $brand, string $color, float $motors){
        parent::__construct($brand, $color); 
        $this -> motors = $motors;
    }

    public function outMotor( ) : string{
        return 'car: ' . $this->brand . ", " . "color: " . $this -> color . ": ". "motor: " . $this -> motors ;
    }

}

// $myMotor = new Motor( "Tayota", "Black", 3.5);
// $out = $myMotor -> outMotor();

// 3. static

class CarStatic{  
    public static int $count = 0;

    public function __construct( ){
        self::$count++;
    }   
}


$objStatic = new CarStatic();
$objStatic1 = new CarStatic();
$objStatic3 = new CarStatic();


echo CarStatic::$count; // Выведет: 0
// echo $objStatic::$count;


// echo $out ;  
echo "\n";
