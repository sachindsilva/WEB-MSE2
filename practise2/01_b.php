<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {

        if ($j <= $i) {
            echo "$j" . " ";
        }
    }
    echo "<br>";
}
?>