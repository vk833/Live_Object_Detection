<?php 
session_start();
if($_SESSION["userid"]>=0){
$_SESSION["userid"]='';
}

header("location:index.php");
?>