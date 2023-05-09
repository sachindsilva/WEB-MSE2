<?php

$servername="localhost";
// 172.16.2.3

$username="root";
// student

$password = "";
// student

$database="student1";
// student1

$conn = new mysqli($servername,$username,$password,$database);

// $conn = mysqli_connect($servername,$username,$password,$database);

// if(!$conn){
//     die("Connection Failed !! ".$conn->connect_error);
// }


if($conn->connect_error){
    die("Connection Failed !! ".$conn->connect_error);
}

echo "Your Database is connected successfully";
echo "<br>";

$sql="CREATE TABLE ronson_4nm20is120(
    SID int,
    Student_Name varchar(50),
    USN varchar(50),
    Branch varchar(50),
    City varchar(50),
    CGPA varchar(50))";

if($conn->query($sql) === TRUE){
    echo "Your table has been successfully created...";
}else {
    echo "Sorry! You're creating an existing table";
}

// Retrieving the contents from the table


$sql_display =mysqli_query($conn,"SELECT * FROM ronson_4nm20is120");
echo "<br>";

echo "Table Contents are ";
echo "<br>";

// while($data = mysqli_fetch_array($sql_display)){
//     echo "STUDENT ID :".$data["SID"]." STUDENT NAME :".$data["Student_Name"]." USN : ".$data["USN"]." BRANCH : ".$data["Branch"]." CITY : ".$data["City"]." CGPA :".$data["CGPA"];
// }

// INSERTING DATA 


// $sql_insert1=mysqli_query($conn,"INSERT INTO ronson_4nm20is120 VALUES(
//     1001,'Sachin Dsilva','4nm20is120','ISE','Udupi','9.64'");



// $sql1="INSERT INTO ronson_4nm20is120 VALUES(
//     1001,'Sachin Dsilva','4nm20is120','ISE','Udupi','9.64')";

// if($conn->query($sql1)===TRUE){
//     echo "<br>";
//     echo "Record inserted successfully";
//     echo "<br>";

// } else{
//     echo "Error !! Not able to insert the record....";
//     echo "<br>";

// }

echo "Inserted contents are ";

$sql2=mysqli_query($conn,"SELECT * FROM ronson_4nm20is120");

while($data=mysqli_fetch_array($sql2)){
    echo "STUDENT ID :".$data["SID"]." STUDENT NAME :".$data["Student_Name"]." USN : ".$data["USN"]." BRANCH : ".$data["Branch"]." CITY : ".$data["City"]." CGPA :".$data["CGPA"]."<br>";
    echo "<br>";
}

// $sql3=mysqli_query($conn,"INSERT INTO ronson_4nm20is120 VALUES(
//     1002,'Ronson Dsilva','4nm20is086','ISE','Mangalore','9.01')");

// if($conn->query($sql3) === TRUE){
//     echo "<br>";
//     echo "Record inserted successfully";
//     echo "<br>";

// } else{
//     echo "Error !! Not able to insert the record....";
//     echo "<br>";

// }


$sql4=mysqli_query($conn,"SELECT * FROM ronson_4nm20is120
ORDER BY CGPA");


echo "<hr>";

echo "----------- ORDER BY CGPA --------";
echo "<hr>";


while($data =mysqli_fetch_array($sql4)){
    echo "STUDENT ID :".$data["SID"]." STUDENT NAME :".$data["Student_Name"]." USN : ".$data["USN"]." BRANCH : ".$data["Branch"]." CITY : ".$data["City"]." CGPA :".$data["CGPA"]."<br>";
    echo "<br>";
}

// $sql5=mysqli_query($conn,"DELETE FROM ronson_4nm20is120
// WHERE CGPA = '9.01'");

// if($conn->query($sql5) === TRUE){
//     echo "RECORD DELETED SUCCESSFULLY";
//     echo "<hr>";
// } else {
//     echo "SORRY NOT ABLE TO DELETE / RECORD DOESN'T EXISTS";
// }


$sql6 = mysqli_query($conn,"UPDATE ronson_4nm20is120 SET City = 'NMAMIT'");

if($conn->query($sql6)===TRUE){
    echo "Updated Successfully";
    echo "<br>";
}else {
    echo "AINT UPDATE!";
    echo "<br>";
}


mysqli_close($conn);



?>