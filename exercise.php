<?php


// star function
function star($number){
  for($i = 1; $i <= $number; $i++){
    for($j = 1; $j <= $i; $j++){
      echo "* ";
    }
    echo "<br />";
  }
}

echo star(10);


// number function
function number($num){
  for($i = 1; $i <= $num; $i++){
    if($i == $num){
      echo $i;
    }
    else {
      echo $i."-";
    }
  }
}

echo number(20). "<br />";


// function sum total number
function sum($num){
    $sum = 0;

    for( $i = 0; $i <= $num; $i++){
        $sum += $i;
    }
    echo $sum;
}

echo sum(30). "<br />";


// function factorial
function factorial($num){
    $totalFactorial = 1;
    if($num == 1 || $num == 0){
        echo $totalFactorial;
    }
    else{
        for($i = 1; $i <= $num; $i++){
            $totalFactorial *= $i;
        }
        echo $totalFactorial;
    }
}

echo factorial(5). "<br />";


// function calculate your score
function grade($score){

    if ($score >= 90 && $score <= 100) {
        echo 'Your grade is A+';
    }

    else if ($score >= 80 && $score <= 89) {
        echo 'Your grade is A';
    }

    else if ($score >= 70 && $score <= 79) {
        echo 'Your grade is B';
    }

    else if ($score >= 60 && $score <= 69) {
        echo 'Your grade is C';
    }

    else if ($score >= 50 && $score <= 59) {
        echo 'Your grade is D';
    }

    else if ($score >= 0 && $score <= 49) {
        echo 'Your grade is F';
    }

    else {
        echo 'Your score is Error';
    }
}

echo grade(100);