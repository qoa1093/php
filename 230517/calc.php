<?php


declare(strict_types=1);

function factorial(int $number): float
{
    $factorial = $number;
    while ($number > 2) {
        $number--;
        $factorial *= $number;
    }
    return $factorial;
}


function sum(): float
{
    return array_sum(func_get_args());
}


function prime(int $number): bool
{
    //$flag1 = false;
    //$flag = true;
    if (2 >= $number) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function performOperation(string $operation)
{
   switch ($operation) {
       case 'factorial':
           // get the second parameter, it must be ant int, we will cast it to int to be sure
           $number = (int) func_get_arg(1);
           return factorial($number);
       case 'sum':
           // get all parameters
           $params = func_get_args();
           // remove the first parameter, because it is the operation
           array_shift($params);
           return call_user_func_array('sum', $params);
        case 'prime':
            $number = (int) func_get_arg(1);
            return prime($number);
      }
   }
  
        echo performOperation("prime", 1231) ? 'true' : 'false';
        echo '<br>';
        echo performOperation("sum", 1,2,31);
        echo '<br>';
        echo performOperation("factorial", 8);


?>