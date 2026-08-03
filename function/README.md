# Lesson Functions

## Introductins
 - [Что ткое Анонимная Функция](#анонимная-Функция)
 - Что такой строгий типизация?
 - примеры с функциями! 

---

# Анонимная Функция

```php 

    // анонимный функция
    $name = "Иван";

    $num = 0;
    $sayHello = function() use ($name, &$num) {
        $num++;
        return "Привет, " . $name . " ". $num . " раз. \n"; 
    };

    echo $sayHello();

```
[примеры](func_0.php)