<?php
function fibonacci($n){
    if($n == 0){
        return 0;
    } else if($n == 1){
        return 1;
    } else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

for($i = 0; $i < 10; $i++){
    $fib = fibonacci($i);
    echo "$fib\n";
    if($fib > 100){
        break; 
    }
}
?>