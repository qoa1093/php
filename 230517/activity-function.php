<?php
  $directors = [
'steven-spielberg' => [
    'ET',
    'Raiders of the lost ark',
    'Saving Private Ryan'
    ],
'martin-scorsese' => [
    'Ashes and Diamonds',
    'The Leopard',
    'The River'
    ],
'kathryn-bigelow' => [
    'Detroit',
    'Last Days',
    'The Hurt Locker'
    ],
'felix-gary-gray' => [
    'Men in Black: International',
    'The Fate of the Furious',
    'Law Abiding Citizen'
    ]
];

function processDirectorName($name){
     $nameParts = explode('-', $name);// - 기준으로 string을 분리
     $firstname = ucfirst($nameParts[0]); //맨 앞글자를 대문자로
     $lastname = strtoupper($nameParts[1]); //모든 string을 대문자로
     $lastname2 = strtoupper($nameParts[2] ?? "");
        return "$firstname $lastname $lastname2";
    
}
function processMovies($movies){
    $formattedStrings = [];
    for ($i = 0; $i < count($movies); $i++) {
        $formattedStrings[] = '"' . strtoupper($movies[$i]) . '"';
    }
    return implode(",", $formattedStrings);//배열의 요소를 결합해서 문자열로 변환
}
ksort($directors); //키 오름차순으로 순서로대로 정렬
foreach ($directors as $key => $value) {
   echo processDirectorName($key) . ": ";
   echo processMovies($value);
   echo '<br>';
}
    
    



?>
    