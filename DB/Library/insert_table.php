<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "movie";




$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed!!" . $conn->connect_error);
}

echo "Connected Successfully";
echo "<hr>";

$sql_insert = mysqli_query($conn, "INSERT INTO book VALUES(
    1004,'Inception','I',1564,620.0,'5rd')");

if ($conn->query($sql_insert) == FALSE) {
    echo "Record inserted successfully";
    echo "<hr>";

} else {
    echo "Error!! Not able to insert...";
    echo "<hr>";

}

mysqli_close($conn);
?>