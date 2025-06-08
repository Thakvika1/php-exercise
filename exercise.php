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

echo factorial(5);