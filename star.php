
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