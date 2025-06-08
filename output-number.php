

<?php

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