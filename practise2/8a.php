<?php 
    $arr=array(45,3,2,7,11,4);


    echo "Array contents are ";
    echo  "<br>";
    
    foreach($arr as $a ){
        echo "$a"." ";
    }

    echo "<hr>";
    
    echo "Ascending Order ";
    echo  "<br>";
    sort($arr);
    
    foreach($arr as $a){
        echo "$a"." ";
    }

    echo "<hr>";
    
    echo "Descending Order ";
    echo  "<br>";
    rsort($arr);
    
    foreach($arr as $a){
        echo "$a"." ";
    }

    echo "<hr>";


?>