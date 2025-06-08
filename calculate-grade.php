

<?php

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