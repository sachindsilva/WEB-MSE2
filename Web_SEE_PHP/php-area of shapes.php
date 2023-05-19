<!DOCTYPE html>
<html>
<head>
    <title>PHP-Area of Shapes</title>
</head>
<body>
    <h1>Area of shapes</h1>
    <?php

    $pi = 3.14;

    $length = 20;

    $breadth = 40;

    $radius = 4;

    $circle = $pi * $radius * $radius;
    $area_rec = $length * $breadth;
    $per_rec = 2 * ($length * $breadth);

    echo "AREA OF CIRCLE WITH RADIUS ".$radius." : ".$circle;
    echo "<br>";
    echo "<hr>";
    
    echo "AREA OF RECTANGLE WITH BREADTH : ".$breadth." AND LENGTH : ".$length." IS ".$area_rec;
    
    echo "<br>";
    echo "<hr>";
    
    echo "PERIMETER OF RECTANGLE WITH BREADTH : ".$breadth." AND LENGTH : ".$length." IS ".$per_rec;
    
    echo "<br>";
    echo "<hr>";

        ?>
</body>
</html>