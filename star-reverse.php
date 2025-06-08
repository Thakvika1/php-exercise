
<?php

function starReverse($num){
    for($i = 1; $i <= $num + 1; $i++){
        for($j = $num; $j >= $i; $j--){
            echo "* ";
        }

        echo "<br />";
    }
}

echo starReverse(5);