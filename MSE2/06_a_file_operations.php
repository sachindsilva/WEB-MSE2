<!-- 6. Execute the following:
a) Write a PHP script to perform file operations
i) display the contents from a file.
ii) write the contents into a file.
iii) append the contents to existing file -->

<!DOCTYPE html>
<html>
<head>
    <title>FILE OPERATIONS</title>
</head>
<body>
    <p style="font-size: 30px;">

    <?php
    // Display the contents from the file 
    
    echo "------------ <br>";
    echo file_get_contents("file1.txt");

    // Write the contents into a file 

    echo file_put_contents("file2.txt","This is a file.txt that is modified just a moment..!");
    echo file_get_contents("file2.txt");
    echo "<hr>";

    // Append the contents into an existing file

    echo file_put_contents("file2.txt","This line is appended into file2.txt!!",FILE_APPEND);

    echo file_get_contents("file2.txt");

    ?>
    </p>
</body>
</html>