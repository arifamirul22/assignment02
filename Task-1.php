<?php
// Start For loop
function evenNumber($start, $end, $step) {
     for ($a = $start; $a <= $end; $a += $step) {
        if ($a % 2 == 0) {
             echo $a . " ";
         }
     }
     echo "\n";
 }
 echo "Using for loop: ";
evenNumber(2, 20, 1 ); // End for loop



// Start While loop

function evenNumberWhile($start=2, $end=20, $step=1) {
    $a = $start;
    while ($a <= $end) {
        if ($a % 2 == 0) {
            echo $a . " ";
        }
        $a += $step;
    }
    echo "\n";
}
echo "Using while loop: ";
evenNumberWhile();// End While loop

// Start Do-While loop

function EvenNumbersDoWhile($start=2, $end=20, $step=1) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
    echo "\n";
}
echo "Using do-while loop: ";
EvenNumbersDoWhile(); //End Do while loop