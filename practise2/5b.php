<!DOCTYPE html>
<html>
<head>
    <title>Temperature</title>
</head>
<body>
    <h1>Farenheit to Celsius</h1>
    <p>
        <?php
        $f = 80.6;
        $c = (5 * ($f - 32)) / 9;
        echo "Temperature is $c degree C";
        ?>
    </p>

    
    
    <h1>Celsius to Farenheit</h1>
    <p>
          <?php
          $c = 27;
          $f = (9 * ($c)) / 5 + 32;
          echo "Temperature is $f degree F";
          ?>
    </p>
</body>
</html>