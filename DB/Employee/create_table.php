<?php

$servername = "localhost";
// $servername = "172.16.2.3";
$username = "root";
// $username="student";
$password = "";
// $password="student";

$database = "student1";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed ... " . $conn->connect_error);
}

echo "Your Database is successfully connected";
echo "<hr>";

// $sql_create = mysqli_query($conn, "CREATE TABLE employee1(
//     empid int,
//     emp_name varchar(20),
//     department varchar(20),
//     designation varchar(20),
//     salary int,
//     doj varchar(20)
// )");

// if (mysqli_query($conn, $sql_create)) {
//     echo "Table created successfully";
//     echo "<br>";
//     echo "<hr>";

// } else {
//     echo "Not able to create the table since it already exists...";
//     echo "<hr>";

// }

$sql_create="CREATE TABLE employee3(
        empid int,
        emp_name varchar(20),
        department varchar(20),
        designation varchar(20),
        salary int,
        doj varchar(20))";

if ($conn->query($sql_create)===TRUE) {
    echo "Table created successfully";
    echo "<br>";
    echo "<hr>";

} else {
    echo "Not able to create the table since it already exists...";
    echo "<hr>";

}


?>