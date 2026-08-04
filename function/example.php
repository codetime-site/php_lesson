<?php

declare(strict_types=1);

// Задача 1 (★☆☆☆☆)
function sum(int $a, int $b ): int { return $a + $b; }

// echo sum(5, 7) . "\n";



// task 2 (★★☆☆☆) // 
function isEven(int $num): bool{
    if ($num < 0 ) return isEven($num * -1);
    return $num % 2 === 0;
}

// var_dump (isEven(-36));



// task №3
function findMax(array $numbers){
    if( empty( $numbers) ) return null;
    $max = $numbers[0];
    foreach ( $numbers as $num ) if($num > $max) $max = $num;
    return $max;
}

// $arr = [5,6,7,9,7,98,8,9,756];
// var_dump( findMax($arr) );



//  task №4
function calculator(int $a, int $b, string $operator){
    return match ($operator) {
        '+' => $a + $b,
        '*' => $a * $b,
        '-' => $a - $b,
        '/' => $b != 0 ? $a / $b : "Ошибка: деление на ноль" ,
        default => "Неизвестная операция"
    };
}

// var_dump(calculator(5, 0, ""));



//  task №5
function generatePassword(int $num, bool $Numbers, bool $Letters, bool $Charsets){
    
    // Символы который надо использовать 
    $numbers = '0123456789';
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charset = '!@#$%^&*()_+-=[]{}|;:,.<>?';

    // Объядинить символы 
    $char = "";
    if( $Numbers ) $char .= $numbers;
    if( $Letters ) $char .= $letters;
    if( $Charsets ) $char .= $charset;
    if( empty( $char ) ) return "Ошибка: выберите хотя бы один тип символов";

    $password = "";
    $maxIndex = strlen($char) - 1 ;

    for ($i = 0; $i < $num; $i++ ){
        $password .=$char[random_int(0, $maxIndex)];
    }
    return $password;
}

// echo generatePassword(12, true, true, true);
