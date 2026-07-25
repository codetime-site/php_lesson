# lesson php Class

## Introduction
 - What is a class?
 - What is a __construct?
 - What is a Properties?
 - What is a method?
 - [What is a static ?](#static)
 - What is a extends?
 - What is a Object?
 - What is a access modifiers (областями видимости или ( модификаторами доступа).)?
 - What is a Object?

### What is a class? 
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

#### [Статические методы (функции-помощники)](index.php#L58)
    
 > hello
