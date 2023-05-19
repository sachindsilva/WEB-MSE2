<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Factorial</title>
</head>
<body>
    <h2>- Factorial Calculator -</h2>
    <p>Factorial of a number</p>

    <form method="POST">
        <label for="number">Enter a number :</label>
        <input type="number" name="number">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
        <br>
        <br>

    </form>

    <?php

    if (isset($_POST["submit"])) {

        $input = $_POST["number"];

        $fact = 1;
        for ($i = $input; $i > 0; $i--) {
            $fact = $fact * $i;
        }

        echo "The Factorial of " . $input . " = " . $fact;
    }


    ?>
</body>
</html>