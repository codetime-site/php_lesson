# lesson php Class

## Introduction
 - What is a class?
 - What is a __construct?
 - What is a Properties?
 - What is a method?
    - [Как узнать полное имя класса и имя текущего метода в формате]()
    - [Статические методы (функции-помощники)](#cтатические-методы-функции-помощники)
 - [What is a static ?](#static)
 - What is a extends?
 - What is a Object?
 - What is a access modifiers (областями видимости или ( модификаторами доступа).)?
 - What is a Object?

## What is a class? 
 - sadasdas
 - [link on code](index.php#L6);


<h3 style ='color:green' id="static">What is a static</h3>
<!-- ### What is a static -->
 - Ключевое слово static в PHP делает свойства и методы принадлежащими самому классу, а не конкретным объектам.Обычные свойства и методы требуют создания объекта через new. Статические элементы доступны напрямую через имя класса.

 ``` php
    class Counter {
        // Статическое свойство для подсчета созданных объектов
        public static int $count = 0;

        public function __construct() {
            // self:: используется вместо $this для обращения к статическим элементам
            self::$count++; 
        }
    }

    // Объекты еще не созданы, но свойство уже существует!
    echo Counter::$count; // Выведет: 0

    $obj1 = new Counter();
    $obj2 = new Counter();

    // Обращаемся напрямую через имя класса и оператор ::
    echo Counter::$count; // Выведет: 2
    
```

 - [link on code](index.php#CarStatic);

### [Статические методы функции помощники](index.php#L58)
```php

class MathHelper {
    // Метод просто считает сумму двух чисел
    public static function sum(int $a, int $b): int {
        return $a + $b;
    }
}

// Вызов без создания объекта через new!
echo MathHelper::sum(5, 10); // Выведет: 15

```

> ### Главные правила static:
  1. Нет $this: Внутри статического метода нельзя использовать $this, так как объекта не существует. Instead используйте self::.
  2. Оператор ::: Для доступа используется двоеточие (ИмяКласса::$свойство или ИмяКласса::метод()).
  3. Экономия памяти: Полезно для утилит (работа с датами, валидация, математика), чтобы не плодить лишние объекты в памяти.d

----

### `__METHOD__ `

#### Способ 1. Магическая константа __METHOD__ (Самый частый)Возвращает полное имя класса и имя текущего метода в формате ИмяКласса::имяМетода.
```php 
    class User {
        public function save() {
            // Выведет: User::save
            echo __METHOD__; 
        }
    }

    $user = new User();
    $user->save();
```
#### Способ 2. Магическая константа __FUNCTION__Если вам нужно только чистое название самого метода, без имени класса.

```php
    class Order {
        public function pay() {
            // Выведет: pay
            echo __FUNCTION__; 
        }
    }
    $order = new Order();
    $order->pay();
```
 #### 3. Перебор всех методов класса ( Reflection )Если вам нужно узнать имена методов класса «со стороны» (например, получить список всех доступных функций), используют встроенный класс ReflectionClass.

 ```php

    class HeavyMath {
        public function plus() {}
        private function secretMinus() {}
    }

    $reflection = new ReflectionClass('HeavyMath');
    $methods = $reflection->getMethods();

    foreach ($methods as $method) {
        // Выведет по очереди: plus, secretMinus
        echo $method->getName() . "\n"; 
    }

```

    > Используйте код с осторожностью.Зачем это нужно на практике?Константы __METHOD__ и __FUNCTION__ незаменимы при создании логов (систем ведения записей). С их помощью можно автоматически записывать в файл, в каком конкретно месте программы произошла ошибка, не вписывая имя метода вручную.