<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "movie";


// $conn = mysqli_connect($servername, $username, $password, $database);

// if (!$conn) {
//     die("Connected Failed!!" . $conn->connect_error);
// }

// echo "Database Connected Successfully";

// mysqli_close($conn);


$servername="localhost";
$username="root";
$password = "";

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Connection Failed!!".$conn->connect_error);
}


$sql = "CREATE DATABASE student1";

if($conn->query($sql) === TRUE){
    echo "Database created Successfully";
}else {
    echo "Not able to create the database".$conn->connect_error;
}

$conn->close();


?>