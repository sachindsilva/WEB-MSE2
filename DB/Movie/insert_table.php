<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="movie";



$conn = mysqli_connect($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection Failed..." . $conn->connect_error);

}

echo "Connected Successfully";
echo "<hr>";


$sql_create=mysqli_query($conn,"INSERT INTO movie_table VALUES (
    'Wednesday','Tim Burton','jenna Ortega','4','Detective','English','Horror-Drama')");


if($conn->query($sql_create)===FALSE){
    echo "Record inserted successfully";
    echo "<br>";
    echo "<hr>";
    
} else {
    
    echo "Error! Can't Insert";
    echo "<br>";
    echo "<hr>";
}



mysqli_close($conn);
?>