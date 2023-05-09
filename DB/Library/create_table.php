


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

$sql_create = mysqli_query($conn, "CREATE TABLE book(
    BID int,
    Book_title varchar(20),
    Author_name varchar(20),
    ISSN int,
    Price float,
    Edition varchar(20))");

if ($conn->query($sql_create) == TRUE) {
    echo "Table created successfully";
    echo "<hr>";

} else {
    echo "Table Already Exists...";
    echo "<hr>";

}

mysqli_close($conn);
?>