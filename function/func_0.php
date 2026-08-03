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


// #вызвать в функции, функцию
function test ( $n ){
    return number($n);
}


// Знак вопроса означает, что функция вернет массив ИЛИ null
function getUserCart(int $userId): ?array {
    $cart = loadFromDatabase($userId);
    
    if (empty($cart)) {
        return null; // Корзины нет или пользователь не найден
    }
    
    return $cart; // Возвращаем массив с товарами
}

// Проверка результата
$cart = getUserCart(123);

if ($cart === null) {
    echo "Корзина пуста!";
} else {
    echo "В корзине товаров: " . count($cart);
}

