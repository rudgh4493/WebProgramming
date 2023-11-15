<?php

$filename = 'exam.txt';

$content = file_get_contents($filename);
$lineCount = count(file($filename));
$blankCount = substr_count($content, " ");
$wordCount = $blankCount + $lineCount;
$charCount = mb_strlen($content);

echo "줄 수: $lineCount\n";
echo "단어 수: $wordCount\n";
echo "글자 수: $charCount\n";

?>
