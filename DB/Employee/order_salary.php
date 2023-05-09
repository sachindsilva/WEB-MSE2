<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student1";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed ... " . $conn->connect_error);

}

echo "Database connected successfully";
echo "<br>";
echo "<hr>";

$sql_display=mysqli_query($conn,"SELECT * FROM employee3
ORDER BY salary");

echo "--- The Table contents are ---";
echo "<br>";

while($data=mysqli_fetch_array($sql_display)){
    echo "EMPID : ".$data["empid"]." | EMP_NAME : ".$data["emp_name"]." |DEPARTMENT : ".$data["department"]." | DESIGNATION : ".$data["designation"]." | SALARY : ".$data["salary"]." | DOJ : ".$data["doj"]."<hr>";
    echo "<br>";
}

mysqli_close($conn);

?>