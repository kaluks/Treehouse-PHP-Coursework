<?php
/*
$currentYear = date('Y');


for ( $year = $currentYear - 100; $year <= $currentYear; ++$year){
  echo $year . "<br />\n";
}


while ($year <= $currentYear){
  echo $year . "<br />\n";
  $year++;
}
*/

/*
$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Build something fabulous';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');

asort($learn);
sort($learn);

for ($i = 0; $i < count($learn); $i++){
  echo $learn[$i] . "<br/>";
}
*/

/*
$count =0;

while ((list($key, $val) =  each($learn)) && $count++ <2) {
  echo "$key => $val\n<br/>";
}
*/

$facts = array(
    57 => ' on Heinz ketchup bottles represents the number of varieties of pickles the company once had.',
    2 => ' is the approximate hours a day Giraffes sleeps',
    18 => ' is the average hours a Python sleeps per day',
    10 => ' per cent of the world is left-handed.',
    11 => ' Empire State Buildings, stacked one on top of the other, would be required to measure the Gulf of Mexico at its deepest point.',
    98 => '% of the atoms in your body are replaced every year',
    69 => ' is the largest number of recorded children born to one woman',
);
//add your loop below this line

for ($i=1; $i<=100; $i++) {
 if ( isset($facts[$i]) ) {
   echo $facts[$i];
 }
}




 ?>
