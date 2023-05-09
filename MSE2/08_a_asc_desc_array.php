<!DOCTYPE html>
<html>
<head>
    <title>Ascending and Descending Order</title>
</head>
<body>
    <?php

        $array = array(1,2,10,5,8,3,6);

        echo "Array Elements are :";
        foreach($array as $a){
            echo "$a"." ";
        }
        echo "<hr>";

        echo "Ascending Order is given by ";
        sort($array);
        foreach($array as $a){
            echo "$a"." ";
        }
        echo "<hr>";

        echo "Descending Order is given by ";
        rsort($array);
        foreach($array as $a){
            echo "$a"." ";
        }
        echo "<hr>";
    ?>
</body>
</html>