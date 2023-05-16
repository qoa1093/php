<?php
$directors = [
"Steven Spielberg" => ["The Terminal", "Minority Report", "Catch Me If You Can", "Lincoln", "Bridge of Spies"],
"Christopher Nolan" => ["Dunkirk", "Interstellar", "The Dark Knight Rises", "Inception", "Memento"],
"Martin Scorsese" => ["Silence", "Hugo", "Shutter Island", "The Departed", "Gangs of New York"],
"Spike Lee" => ["Do the Right Thing", "Malcolm X", "Summer of Sam", "25th Hour", "Inside Man"],
"Lynne Ramsey" => ["Ratcatcher", "Swimmer", "Morvern Callar", "We Need To Talk About Kevin", "You Were Never Really Here"]
];

//$moviesLimit = $_GET['movies'];
$moviesLimit = $_GET['movies'] ?? 5;
$directorsLimit = $_GET['directors'] ?? 5;
//echo $moviesLimit;

$directorsCounter = 1;
foreach ($directors as $director => $movies) { // 연관 배열일경우 연관, 연관에 해당되는 배열의 항목
	if ($directorsCounter > $directorsLimit) {
        break;
	}
    echo "$director's movies: " . "<br>";
    
    echo "<br>";
	$moviesCounter = 1;
    foreach ($movies as $movie) {
        if ($moviesCounter > $moviesLimit ) {
            break;
		}
        echo " > $movie " . "<br>";            
        $moviesCounter++;
        
    }
    $directorsCounter++;
    echo "<br>";
}



?>


