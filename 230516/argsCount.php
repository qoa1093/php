<?php
function argCounter() {
     $numOfArgs = func_num_args();
    echo "You passed $numOfArgs arg(s)";
    }
    argCounter(1,2,3,4,5);
    // 결과
    //You passed 5 arg(s);
    
    function dynamicArgs(){
     $count = func_num_args();
     $arguments = func_get_args();
     if($count > 0){
     for($i = 0; $i < $count; $i++){
    echo "Argument $i: $arguments[$i]";
    echo PHP_EOL;
     }
     }
    }
    
    dynamicArgs(1,2,3,4,5);

    function sayHello($name = 'John') {
        return "Hello $name";
        } //&을 붙이면 참조값을 받을 수 있음
        function countMeByReference(int &$count): void
        {
        $count++;
        }
        $count = 0;
countMeByReference($count);
countMeByReference($count);
countMeByReference($count);
echo $count; // will print 3

function determineOutputDirectory(string $systemTempDirectory = 'C:\tmp'): string
{
    return $systemTempDirectory . DIRECTORY_SEPARATOR . 'output';
}

echo (determineOutputDirectory());

?>