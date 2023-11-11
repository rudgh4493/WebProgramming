
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
    echo "10입력: ";
    oddeven(10);
    echo "11입력: ";
    oddeven(11);
    echo "12입력: ";
    oddeven(12);
    echo "13입력: ";
    oddeven(13);
?>
