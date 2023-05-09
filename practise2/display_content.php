<?php

// $file=fopen("sample.txt","w") or die("Unable to open file");

$text="This is a first line <br>";
$text1="This is a second line <br>";


echo file_get_contents("sample.txt");

echo file_put_contents("text2.txt","This is a first line");
echo file_put_contents("text2.txt","This is a second line",FILE_APPEND);
?>