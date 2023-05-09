<!DOCTYPE html>
<html>
    <head>
        <title>Right Star</title>
    </head>
    <body>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                if ($j <= $i) {
                    echo "*" . " ";
                }
            }
            echo "<br>";
        }
        ?>
    </body>
</html>