<?php
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

function printFibonacci($n) {
    $fibonacciNumbers = fibonacci($n);
    for ($i = 0; $i < $n; $i++) {
        echo $fibonacciNumbers[$i] . " ";
    }
}

printFibonacci(15);
?>