# Lesson Functions

## Introductins
 - Что ткое Анонимный Функция

---

# Анонимный Функция
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