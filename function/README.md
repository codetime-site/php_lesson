# Lesson Functions

## Introductins
 - [Что ткое Анонимная Функция](#анонимная-Функция)
 - Что такой строгий типизация?
 - [примеры с функциями](#примеры-с-функциями)! 
 - [что такой Стрелочные функции?](#Cтрелочные-функции)

---

# Анонимная Функция

```php 

    $name = "Иван";

    $num = 0;
    // анонимный функция
    $sayHello = function() use ($name, &$num) {
        $num++;
        return "Привет, " . $name . " ". $num . " раз. \n"; 
    };

    echo $sayHello();

```
[примеры](func_0.php)

---

# Cтрелочные функции
    
```php
    // Фигурные скобки НЕ нужны
    $double = fn($x) => $x * 2; 

    echo $double(5); // Выведет: 10

```



---

# примеры с функциями.

 * функции можно обявить в переменный 
    
 ```php 
    function number(int $a) :int {
        return  $a = $a*5;
    }

    // фуекции можно обявить в переменный 
    $testVar = number(22);
    echo $testVar + $testVar;

    // output:220

 ``` 

 * вызвать в функции, функцию

```php

    function number(int $a) :int {
        return  $a = $a*5;
    }

    function test ( $n ){
        return number($n);
    }

    echo test( 5 );
    echo "\n"; 

// output:25

````


