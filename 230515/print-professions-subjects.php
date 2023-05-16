<?php 

$professions = ["Doctor", "Teacher", "Programmer", "Lawyer", "Athlete"];
$subjects =["Mathematics", "Computer Programming", "Business English", "Graph Theory"];

foreach ($professions as $profession) {
    echo "The Profession is $profession. " . "<br>";
}
echo "<br>";

$totalSubjects = count($subjects);

foreach ($professions as $profession) {
    echo "The Profession is $profession. " . "<br>";
    if ($profession === 'Teacher') {
        
        foreach ($subjects as $name) {
            echo " $name " . "<br>";
        }
        echo "<br>";
        /*for ($i = 0; $profession === 'Teacher' && $i < $totalSubjects; $i++) {
            echo " ". $subjects[$i] . "<br>";
        }*/
    }
}
echo "-----<br>";

$j = 0;
while($j < count($professions) ){
    echo "The profession is $professions[$j] " . "<br>";

   if($professions[$j] === 'Teacher'){
        $i = 0;
        do{
            echo " ". $subjects[$i]. "<br>";
            $i++;
        }while( $i < $totalSubjects);
    }
    $j++;
}

    

?>