

<?php

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