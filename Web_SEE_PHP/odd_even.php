<!DOCTYPE html>
<html>

<head>
    <title>PHP-Odd or Even</title>
</head>

<body>
    <form action="" method="POST">
        <label for="number">Enter a number :</label>
        <input type="number" name="number" id="number">
        <input type="submit" value="submit" name="submit">
    </form>
        
        
        <?php
        if (isset($_POST["submit"])) {
            $input = $_POST["number"];

            if ($input % 2 == 0) {
                echo "<p>".$input . " is even..</p>";
                echo "<br>";
            } else {
                echo "<p>".$input . " is odd..</p>";
                echo "<br>";
            }
        }
        ?>
</body>

</html>