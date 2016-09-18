<?php

$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Build something fabulous';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');

asort($learn);
shuffle($learn);
var_dump($learn[0]);

echo "you removed " . array_shift($learn);
echo "you removed " . array_pop($learn);

unset($learn[1], $learn[2]);
$learn = array_values($learn); //resets the values [i] of the array

//var_dump($learn);

 ?>
