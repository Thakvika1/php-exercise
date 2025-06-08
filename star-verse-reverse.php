

<?php

function star($number){
    for($i = 1; $i <= $number; $i++){
        for($j = 1; $j <= $i; $j++){
            echo "* ";
        }
        echo "<br />";

        if($i == $number) {
            for($i = 1; $i <= $number + 1; $i++){
                for($j = $number; $j >= $i; $j--){
                    echo "* ";
                }

                echo "<br />";
            }
        }
    }
}

echo star(5);