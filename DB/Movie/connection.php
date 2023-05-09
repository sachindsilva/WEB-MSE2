<?php
$servername="localhost";
$username="root";
$password="";




$conn = mysqli_connect($servername,$username,$password);

$sql_db="CREATE DATABASE movie";

if($conn->query($sql_db)===TRUE){
    echo "Database created successfully";
}else{
    echo "Error! Database already exists";
}

mysqli_close($conn);
?>