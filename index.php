<?php


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

$myCar = new Car("Tayota", "Black");
$out = $myCar -> outMethod();

echo $out ;  
echo "\n";
