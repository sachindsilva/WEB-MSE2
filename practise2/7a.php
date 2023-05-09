<?php

$file = fopen("file3.txt","w") or die("Unable to open file");



$text='This is a first line <br>';
$text1='This is a second line <br>';

fwrite($file,$text);
fwrite($file,$text1);
echo readfile("file3.txt");

fclose($file);
?>