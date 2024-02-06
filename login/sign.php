<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$mob = stripslashes($mob);
$mob = addslashes($mob);

$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q3=mysqli_query($con,"INSERT INTO users VALUES  (0,'$name' , '$gender','$email' ,'$mob', '$password',0)");
//$q4=mysqli_query($con,"INSERT INTO profiles(Name,Email,Phone_No,Coupon,Start_Date) VALUES  ('$name','$email','$mob','ABCDE' ,now())");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;

header("location:index.php");
}
else
{
header("location:index.php");
}
ob_end_flush();
?>