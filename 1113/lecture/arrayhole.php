<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>shuffle, sort</title>
</head>

<body>

<?php
    $arr = array();

    for($i=0; $i<46;$i++){
        $arr[$i]=$i;
        echo "{$arr[$i]} ";
    }

    echo "<br>";
    shuffle($arr);    
    for($i=0; $i<46;$i++){
        echo "{$arr[$i]} ";
    }

    echo "<br>";
    sort($arr);
    for($i=0; $i<46;$i++){
        echo "{$arr[$i]} ";
    }

    echo "<br>";

    $numbers =range(1,45);
    shuffle($numbers);
    $select = array_slice($numbers,0 , 6);
    sort($select);
    echo "수 : ", implode(", ",$select)





?>

</body>

</html>