<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Sum of digits</title>
</head>
<body>
    <h1>Sum of Digits</h1>
    <form method="POST">
        <label for="number">Enter a number :</label>
        <input type="number" name="number">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
    </form>

    <?php

    if (isset($_POST["submit"])) {

        $number = $_POST["number"];
        $original = $number;

        $sum = 0;
        $rem = 0;
        for ($i = 0; $i < strlen($number); $i++) {
            $rem = $number % 10;
            $sum = $sum + $rem;
            $number = $number / 10;
        }

        echo "The sum of digits of " . $original . " = " . $sum;
    }

    ?>
</body>
</html>