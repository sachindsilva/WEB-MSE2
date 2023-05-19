<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Fibonacci Series</title>
</head>

<body>
    <h1>PHP-Fibonacci Series..</h1>

    <form method="post">
        <label for="number">Enter a number :</label>
        <input type="text" name="number">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
        <br>
        <br>
    </form>

    <?php

    if (isset($_POST["submit"])) {
        $number = $_POST["number"];
        function Fibonacci($number)
        {


            if ($number == 0) {
                return 0;
            } else if ($number == 1) {
                return 1;
            } else {
                return Fibonacci($number - 1) + Fibonacci($number - 2);
            }
        }

        for ($count = 0; $count <$number; $count++) {
            echo Fibonacci($count), ' ';
        }
    }

    ?>
</body>

</html>