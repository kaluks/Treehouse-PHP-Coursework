<?php

/*$a=5;
$b=-'5';
$c = 0;

if ($a !== $b) {
  echo "The values are not identical
  ";
}
if ($a != $b){
  echo "The values are not equal.
  ";
}


if (!$c) {
  echo "false";
}
if ($c = false){
  echo "false";
}
*/

/* if ($a == $b){
  echo "values are equal";
} elseif ($a<$b){
  echo '$a is less than $b';
} elseif ($a>$b){
  echo '$a is greater than $b';
} */


/* $score = 9;
if ($score >= 60){
  echo "you have completed the level";
} elseif ($score<=30) {
  echo "you may need more practice before trying this level again.";
}

else { echo "please try again!";}
*/

//nested conditionals
/*$num = 1;
if ($num >=10){
  if ($num <= 1000){
    echo "you number is within the normal range";}
    else { echo "your number is too high";}
} else { echo "your number is too low";}
*/

//combining nexted conditionals
/*$num = 11;
if ($num >=10 && $num <= 1000) {
  echo "your number is within range";
} else {"your number is not within the range";}

if ($num =10 || is_string($num)){
  echo " is 10 or string";
} else {echo ' NOT 10 or string';}
*/

$var1 = true && false;

$var2 = true and false; //Don't use 'and', DO use &&;
var_dump($var1);
var_dump($var2);

 ?>
