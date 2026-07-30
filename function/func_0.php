<?php

$name = "Иван";

$num = 0;
$sayHello = function() use ($name, &$num) {
    $num++;
    echo "Привет, " . $name . " ". $num . " раз. \n"; 
};



