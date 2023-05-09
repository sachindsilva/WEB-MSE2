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

$sql_update=mysqli_query($conn,"UPDATE book SET Author_name = 'Chethan Bhagat'");

if ($conn->query($sql_update) == TRUE) {
    echo "Updated Table successfully";
    echo "<hr>";

} else {
    echo "Error!! Not able to update...";
    echo "<hr>";

}

mysqli_close($conn);
?>