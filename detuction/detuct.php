<html>
<body>
<?php 
include_once '../login/dbConnection.php';

session_start();
 if($_SESSION["userid"]=='')
{
header("Location:../login/index.php");
 }
  else
  {
	  $uid=$_SESSION["userid"];
	  $result = mysqli_query($con,"SELECT count from users WHERE userid = $uid") or die('Error');
$count=mysqli_num_rows($result);
$c=0;
if($count==1){
while($row = mysqli_fetch_array($result)) {
		
	$c=$row['count'];
		

}
if($c<3)
{
$c+=1;
	$q=mysqli_query($con,"update users set count=$c where userid = $uid");
$try = shell_exec('python yolov8_n_opencv.py');
if($try!='')
header("Location:../index.php");

}
else
{
	?>
	<script>
	alert("please pay");
 location.replace("payment.php")

	</script>
	<?php

}
}

  }
?>
</body>

</html>