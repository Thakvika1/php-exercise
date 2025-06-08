

<?php

// function sum total number
function sum($num){
    $sum = 0;

    for( $i = 0; $i <= $num; $i++){
        $sum += $i;
    }
    echo $sum;
}

echo sum(30);