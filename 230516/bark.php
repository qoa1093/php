<?php

// Defining a typical object, take note of the method that we defined
class Dog {
    public function __invoke(){
      echo "Bark";
    }
    }
    // Initialize a new instance of the dog object
    $sparky = new Dog();
    // Here's where the magic happens, we can now call this
    $sparky();
    
    function foo()
    {
    }
    //is_callable : 호출가능 여부를 확인하는 조건식
    echo is_callable('foo') ? '"foo" is callable' : '"foo" is NOT a callable', "<br>";
    
    // 익명함수
    if (true === is_callable(function () {})) {
        echo 'anonymous function is a callable';
        } else {
        echo 'anonymous function is NOT a callable';
        }
        
        //인수의 모든 글자를 대문자로 바꿔줌
        echo strtoupper('Foo');

        echo '<pre>';
        print_r(get_loaded_extensions());
        echo '</pre>';

        //파라미터로 참조값 넘기기
        //참조값 기준으로 변경됨
        $fruits = [
            'Pear',
            'Orange',
            'Apple',
            'Banana',
            ];
            
            sort($fruits);
            echo "<pre>";
            print_r($fruits); 
            echo "</pre>";
        // clone복사값으로 변경됨     
        $fruits = [
            'Pear',
            'Orange',
            'Apple',
            'Banana',
            ];
                
        $reversedFruits = array_reverse($fruits);    
                
            echo "<pre>";
            print_r($reversedFruits); 
            echo "</pre>";
            


    
?>