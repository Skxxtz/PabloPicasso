<?php 

if(isset($_POST['submitbtn'])){
	$conn = mysqli_connect("localhost","root","AwX-2050", "Picasso");
	
	$mail = $_POST['mail1'];
	$pwd = $_POST['pwd1'];
	

	
if(empty($mail) || empty($pwd)){
	header("Location: index.php?error=emptyfields&email=".$mail);
	exit();	
} else {
 	$sql ="SELECT * FROM User WHERE Email= ?;";
	$stmt = mysqli_stmt_init($conn);
	
if(!mysqli_stmt_prepare($stmt, $sql)){
	header("Location: index.php?error=sqlerror&email=".$mail);
	exit();	
		
} else {
	mysqli_stmt_bind_param($stmt, "s", $mail);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	

	



if($row = mysqli_fetch_assoc($result)){
	$pwdCheck = password_verify($pwd, $row['Passwort']);
	
if($pwdCheck == false){
	header("Location: index.php?error=invalidePwd&email=".$mail);
	exit();	
	
} else if($pwdCheck == true){		
	session_start();
	$_SESSION['Prename'] = $row['Vorname'];
	$_SESSION['Name'] = $row['Name'];
	$_SESSION['Email'] = $row['Email'];
	header("Location: Dashboard.php#Dashboard");
	
	
	
	exit();	
	
} else {
	header("Location: index.php?error=invalidePwd&email=".$mail);
	exit();}
			
} else {
	header("Location: index.php?error=nouser&email=".$mail);
	exit();	
}}}
} else {
	header("Location: index.php?lul");
	exit();	
}


