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
