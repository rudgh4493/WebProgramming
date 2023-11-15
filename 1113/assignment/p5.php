<?php
$filename = "client.txt";

$file = fopen($filename, 'r');

while ($line = fgets($file)) {
    $data = explode(' ', $line);
    $age = isset($data[1]) ? intval($data[1]) : 0;

    if ($age >= 30) {
        echo "이름: $data[0], 나이: $age, 성별: $data[2], 이메일: $data[3]";
    }
}

?>
