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

echo number(20);