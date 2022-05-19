<?php

if(isset($_POST['submitbtn'])){

	$conn = mysqli_connect("localhost","root","AwX-2050", "Picasso");
	$prename = $_POST['pname'];
	$name = $_POST['name'];
	$email = $_POST['mail'];
	$password = $_POST['password']; 
	$Cpassword = $_POST['Cpassword'];




if(empty($prename) || empty($name) || empty($email) || empty($password) || empty($Cpassword)){
	header("Location: index.php#registration?error=emptyfields&pname=".$prename."&name=".$name."&mail=".$email);
	exit();
} else if(!isset($_POST['agb'])){
	header("Location: index.php#registration?error=agb&pname=".$prename."&name=".$name."&mail=".$email);
	exit();
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location: index.php#registration?error=invalidemail&pname=".$prename."&name=".$name);
	exit();
} else if($password !== $Cpassword){
	header("Location: index.php#registration?error=passwordcheck&pname=".$prename."&name=".$name."&mail=".$email);
	exit();
} else {
	
	$sql = "SELECT * FROM User WHERE Email=?";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: index.php#registration?error=sqlerror&pname=".$prename."&name=".$name."&mail=".$email);
	exit();
} else {
	mysqli_stmt_bind_param($stmt, "s", $email);  
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	$resultCheck = mysqli_stmt_num_rows($stmt);
if($resultCheck > 0){
	header("Location: index.php#registration?error=emailtaken&pname=".$prename."&name=".$name);
	exit();	
} else {
	$sql="INSERT INTO `User`( `Vorname`, `Name`, `Email`, `Passwort`) VALUES (?,?,?,?)";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: index.php#registration?error=sqlerror&pname=".$prename."&name=".$name."&mail=".$email);
	exit();
} else { 
	$hashedpwd = password_hash($password, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt, "ssss", $prename, $name, $email, $hashedpwd);  
	mysqli_stmt_execute($stmt);
	
	header("Location: index.php?signup=success");
	exit();	  
}}}}
mysqli_stmt_close($stmt);
mysqli_close($conn);
} else {
	header("Location: index.php#registration");
}
 