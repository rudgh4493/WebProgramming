<?php
    function oddeven($a){        
        if($a%2==0){
            echo "{$a}";
            echo "\n";    
        }
        if($a%2==1){
            echo "{$a}"+1;    
            echo "\n";
        }  
    }

    oddeven(10);
    oddeven(11);
    oddeven(12);
    oddeven(13);
?>