<?php

declare(strict_types=1);
// анонимный функция
$name = "Иван";

$num = 0;
$sayHello = function() use ($name, &$num) {
    $num++;
    return "Привет, " . $name . " ". $num . " раз. \n"; 
};

// echo $sayHello();

// 1. хочу вызвать в функции, функцию
// 2. хочу обявлять функции в перемеенный 

function number(int $a) :int {
    return  $a = $a*5;
}

// фуекции можно обявить в переменный 
$testVar = number(22);
echo $testVar + $testVar;

// вызвать в функции, функцию
function test ( $n ){
    return number($n);
}

echo test( 5 );
echo "\n";