<?php
    function factorial($n){       
        if($n==0) return 1;
        return $n * factorial($n-1);        
    }

    echo "4! = ";
    echo factorial(4);
    echo "\n5! = ";
    echo factorial(5);
    echo "\n6! = ";
    echo factorial(6);
?>
