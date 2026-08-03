<?php

// анонимный функция
$name = "Иван";

$num = 0;
$sayHello = function() use ($name, &$num) {
    $num++;
    return "Привет, " . $name . " ". $num . " раз. \n"; 
};

echo $sayHello();
// привет илсина


