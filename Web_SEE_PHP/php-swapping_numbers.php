<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Swap numbers</title>
</head>
<body>
    <form method="POST">
        <label for="first">Enter first number :</label>
        <input type="text" name="first">
        <br>
        <br>
        <label for="second">Enter second number :</label>
        <input type="text" name="second">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php

    if(isset($_POST["submit"])){
        $first=$_POST["first"];
        $second=$_POST["second"];

        echo "Before Swapping the numbers are..";
        echo "<br>";
        echo "a = ".$first;
        echo "<br>";
        echo "b = ".$second;
        echo "<br>";

        $temp=$first;
        $first=$second;
        $second=$temp;

        echo "After Swapping the numbers are..";
        echo "<br>";
        echo "a = ".$first;
        echo "<br>";
        echo "b = ".$second;

    }

    ?>
    
</body>
</html>