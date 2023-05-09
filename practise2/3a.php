<!DOCTYPE html>
<html>

<head>
    <title>Digital Clock</title>
</head>
<style>
    body {
        height: 90vh;
        background-color: black;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        font-family: sans-serif;
        font-size:40px;
    }
</style>

<body>

<?php echo date("Y-m-d "); ?>
<?php echo date("h:i:s A"); ?>
</body>

</html>