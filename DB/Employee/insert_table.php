<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student1";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed ... " . $conn->connect_error);

}

echo "Database connected successfully";
echo "<br>";
echo "<hr>";

$sql_insert1 = mysqli_query($conn, "INSERT INTO employee3 VALUES(
    1003,'Drew','CSE','Musician',300000,'27-09-2002')");

if ($conn->query($sql_insert1) === FALSE) {
    echo "Record inserted successfully";
    echo "<hr>";

} else {
    echo "Cannot insert the record";
    echo "<hr>";

}

mysqli_close($conn);

?>