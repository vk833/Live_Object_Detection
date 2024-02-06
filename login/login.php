<?php
session_start();
if(isset($_SESSION["email"])){
$_SESSION["userid"] = "";
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password);
$password=($password);

$password=md5($password); 
$result = mysqli_query($con,"SELECT userid,name,count FROM users WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
$c=0;
if($count==1){
while($row = mysqli_fetch_array($result)) {
		
	$c=$row['count'];
	$name = $row['name'];
	$userid = $row['userid'];
		
$_SESSION["userid"] = $userid;
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;

}


header("location:../index.php");
}
else
header("location:$ref?w=Wrong Username or Password");


?>