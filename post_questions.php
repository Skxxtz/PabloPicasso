<?php


$servername = "localhost";
$username = "root";
$password = "AwX-2050";
$dbname = "Picasso";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$Topics = $_POST['Topic'];
$Contents = $_POST['Content'];
$sql = "INSERT INTO `Questions`(`Topic`, `Content`) VALUES ('$Topics','$Contents')";

if ($conn->query($sql) === TRUE) {
  header("loacaion: Dashboard.php#Fragen ");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();