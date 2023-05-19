<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greatest of 3 numbers</title>
</head>

<body>
    <h1>GREATEST OF THREE NUMBERS</h1>
    <form method="post">
        <label for="first">Enter First Number :</label>
        <input type="text" name="first">
        <br>
        <br>
        <label for="second">Enter Second Number :</label>
        <input type="text" name="second">
        <br>
        <br>
        <label for="third">Enter Third Number :</label>
        <input type="text" name="third">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">
        <br>
        <br>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $first = $_POST["first"];
        $second = $_POST["second"];
        $third = $_POST["third"];

        if ($first > $second and $first > $third) {
            echo $first . " is greatest";
        } else if ($second > $first and $second > $third) {
            echo $second . " is greatest";
        } else if ($third > $first and $third > $second) {
            echo $third . " is greatest";
        } else {
            echo "The numbers are equal..";
        }


    }
    ?>

</body>

</html>