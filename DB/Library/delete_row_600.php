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

$sql_delete = "DELETE FROM book WHERE Price >= 600.0";

if ($conn->query($sql_delete) == TRUE) {
    echo "Record Deleted successfully";
    echo "<hr>";

} else {
    echo "Error!! Not able to delete/record doesn't exists...";
    echo "<hr>";

}

mysqli_close($conn);
?>