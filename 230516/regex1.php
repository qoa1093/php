<?php

$text = "We would like to see if any spaces ".
        "followed by three word characters ".
        " are in this text";

$pattern = "/\s\w{3}/i";

$matches = [];

preg_match_all($pattern, $text, $matches);

//다른 변수를 리턴해줌
$output = print_r($matches, true);


echo '<pre>';
print_r($matches);
echo'</pre>';

?>