<?php
session_start();
$ima=[];
$arr=[];

for ($x = 0; $x < count($_FILES["file"])-1; $x++) {
    $check = getimagesize($_FILES["file"]["tmp_name"][$x]);
    if($check !== false) {
    $base = base64_encode(file_get_contents( $_FILES["file"]["tmp_name"][$x]));
    
    $conn = mysqli_connect("localhost","root","AwX-2050", "Picasso");
	$images = strval($base);
    $Account = $_SESSION['Email'];


    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `Images` (`Account`, `Image`)
    VALUES ($Account, $images)";

    if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
    
    
    
}
}





   

	
