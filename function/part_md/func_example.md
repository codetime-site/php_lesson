
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