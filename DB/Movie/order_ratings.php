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

$sql_display=mysqli_query($conn,"SELECT * FROM movie_table
ORDER BY ratings");

while($data=mysqli_fetch_array($sql_display)){
    echo "MOVIE NAME : ".$data["movie_name"]." | DIRECTOR NAME : ".$data["director_name"]." | ACTOR NAME : ".$data["actor_name"]." | RATINGS : ".$data["ratings"]." | ROLE : ".$data["play_role"]." | LANGUAGE : ".$data["language"]." | GENRE : ".$data["genre"]."<hr>";
    echo "<br>";
}


mysqli_close($conn);
?>