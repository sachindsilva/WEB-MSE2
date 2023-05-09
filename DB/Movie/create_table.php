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


$sql_create=mysqli_query($conn,"CREATE TABLE movie_table(
    movie_name varchar(50),
    director_name varchar(50),
    actor_name varchar(50),
    ratings int,
    play_role varchar(50),
    language varchar(50),
    genre varchar(50))");

if($conn->query($sql_create)===TRUE){
    echo "Table created successfully";
    echo "<br>";
    echo "<hr>";
    
} else {
    
    echo "Table Already Exists";
    echo "<br>";
    echo "<hr>";
}



mysqli_close($conn);
?>