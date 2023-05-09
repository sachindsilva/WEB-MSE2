<!DOCTYPE html>
<html>
<head>
    <title>DIGITAL CLOCK</title>
</head>
<style>
    body{
        background-color: black;
        color: white;
        display: flex;
        justify-content: center;
        align-items:center;
        height: 90vh;
        font-weight: bold;
    }

</style>
<body>
    <p>
    <?php
    echo date("Y-m-d h:i:s A");
    ?>
</p>
</body>
</html>