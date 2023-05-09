<!DOCTYPE html>
<html>
<head>
    <title>Store and Display from File</title>
</head>
<body>
    <p style='font-size: 30px;'>


        <?php
             $file = fopen("file1.txt","w") or die("Unable to open the file");

             echo "PHP --> Hypertext Preprocessor <br>";

             $text = "HTML is a markup language<br>";

             $text1 = "This line will also be write into the existing file<br>";


             fwrite($file,$text);
             fwrite($file,$text1);

             echo readfile("file1.txt");

             fclose($file);
        ?>
    </p>
    
</body>
</html>