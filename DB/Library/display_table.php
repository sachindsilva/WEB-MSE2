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

$sql_display = mysqli_query($conn, "SELECT * FROM book");

while($data=mysqli_fetch_array($sql_display)){
    echo "BOOK ID : ".$data["BID"]." | BOOK NAME : ".$data["Book_title"]." | AUTHOR NAME : ".$data["Author_name"]." | ISSN : ".$data["ISSN"]." | PRICE : ".$data["Price"]." | EDITION : ".$data["Edition"]."<hr>";
    echo "<br>";
}

mysqli_close($conn);
?>