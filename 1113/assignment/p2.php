<?php
function revsort(&$array) {
    sort($array);
    $array = array_reverse($array);
}

$myArray = [1, 2, 3, 4, 5];
echo "배열: " . implode(", ", $myArray) . "\n";

revsort($myArray);
echo "역순 배열: " . implode(", ", $myArray) . "\n";
?>
