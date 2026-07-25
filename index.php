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
// echo CarStatic::$count; // Выведет: 3
// echo $objStatic::$count;



class MathHelp {

    public static int $a;
    public static int $b;
            
    public function __construct(int $a, int $b) {
        self::$a = $a;
        self::$b = $b;
    }

    public static function plus() {
        return  " This '" . __FUNCTION__. "' func do it: " . self::$a . " + " . self::$b . " = " . self::$a + self::$b . "\n";
    }

    public static function multiplication() {
        return " This '" . __FUNCTION__. "' func do it: " . self::$a . " * " . self::$b . " = " .  self::$a * self::$b;
    }

}


$objM = new MathHelp(5, 6); ;
echo $objM::plus() ;
echo $objM::multiplication() ;

echo "\n";
