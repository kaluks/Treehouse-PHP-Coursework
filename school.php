<?php

$firstName = 'Kareena ';
$lastName = 'Boo';
$currentGrade = 10;
$finalAverage = .9;
$messageBody = '';

if (!$firstName || !$lastName){
    echo 'Please enter a name';
} elseif ($currentGrade <9 || $currentGrade > 12) {
    echo 'This is only for high school students. Please enter a grade between 9 and 12:';
} else {
    if ($finalAverage < .70){
      $messageBody = 'See you at summer school.';
    } else {
        switch ($currentGrade) {
          case 9:
            $messageBody = "Congrats on Freshman year. See you sophomore year!";
            break;
          case 10:
            $messageBody = "Congrats on soph year. See you junior year!";
            break;
          case 11:
              $messageBody = "Congrats on junior year. See you senior year!";
              break;
          case 12:
              $messageBody = "Congrats you've graduated!";
              break;
          default:
              $messageBody = "Error: grade level is not 9 - 12.";
        }
    }

    echo "Dear $firstName $lastName\n";
    echo $messageBody;

}

 ?>
