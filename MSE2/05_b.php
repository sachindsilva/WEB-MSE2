<!DOCTYPE html>
<html>
<head>
    <title>Temperature</title>
</head>
<body>
    <h1>Conversion of Celsius to Farenheit</h1>
    <h4>Temperature in Degree F </h4>
    <?php 
        $celsius = 27;
        $farenheit = (9*($celsius))/5 + 32;
        echo "The Temperature is $farenheit degree F";
    ?>
    <h1>Conversion of Farenheit to Celsius</h1>
    <h4>Temperature in Degree C </h4>

    <?php 
        $farenheit = 80.6;
        $celsius = (5*($farenheit - 32))/9;
        echo "The Temperature is $celsius degree C";
    ?>

</body>
</html>