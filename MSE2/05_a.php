<!DOCTYPE html>
<html>
<head>
    <title>ARRAY OPERATIONS</title>
</head>
<body>
    <p>

        <!-- CREATE 2 ARRAYS  -->
        <?php


        $array1 = array(5, 3, 1, 2, 4, 4);
        $array2 = array(5,50, 40, 30, 50, 20, 10);
        echo " Array Contents are ";
        echo "<br>";
        echo "<br>";
        echo "Array 1 : ";
        foreach ($array1 as $a1) {
            echo "$a1" . " ";
        }

        echo "<br>";
        echo "<hr>";
        
        echo "Array 2 : ";
        foreach ($array2 as $a2) {
            echo "$a2" . " ";
            
        }
        
        echo "<br>";
        echo "<hr>";
        


        // SORT 2 ARRAYS

        sort($array1);
        echo "Sorted Array 1 : ";
        foreach($array1 as $a1){
            echo "$a1"." ";
        }
        echo "<br>";
        echo "<hr>";

        sort($array2);
        echo "Sorted Array 2 : ";
        foreach($array2 as $a2){
            echo "$a2"." ";
        }
        echo "<br>";
        echo "<hr>";


        // COMMON ELEMENTS FROM 2 ARRAYS

        $common_result=array_unique(array_intersect($array1,$array2));

        echo "Common Elements from 2 arrays are : ";
        foreach($common_result as $result){
            echo "$result"." ";
        }
        echo "<hr>";

        $array1_unique = array_unique($array1);
        echo "Unique Array 1 :";
        foreach($array1_unique as $a){
            echo "$a"." ";
        }
        echo "<hr>";
        
        $array2_unique = array_unique($array2);
        echo "Unique Array 2 :";
        foreach($array2_unique as $a){
            echo "$a"." ";
        }
        echo "<hr>";
        ?>

    </p>
</body>
</html>