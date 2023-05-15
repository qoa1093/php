<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Avengers</title>
</head>
<body>
    <?php
    $movieName = $_GET['movieName'];
    $movieYear = $_GET['movieYear']; 
    $movieStar = $_GET['movieStar']; 
    echo "<h1>information about ".$movieName."</h1>";
    echo "Based on the input, here is the information so far:<br>";
    echo $movieStar." starred in the movie ". $movieName." which was released in year ".$movieYear."<br>";
    
    ?>
</body>
</html>