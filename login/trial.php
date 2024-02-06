<html>
<body>
<form method="post">
<h3>Trial version</h3>
<input type="submit" name="try" value="trial">
</form>
<?php
session_start();
include ('dbConnection.php');
if(isset($_POST['try']))
{
	$a=$_SESSION['uid'];
	
$q=mysqli_query($con,"select * from profiles where Email='$a'");
$c=mysqli_num_rows($q);
if($c>0)
{
	
$count=0;	
while($r=mysqli_fetch_assoc($q))
{
		$count=$r['Count'];
}		
if($count<3)
{
$count+=1;
	$q=mysqli_query($con,"update profiles set count=$count where Email='$a'");
}
else
{
	?>
	<script>
	alert("please pay");
	</script>
	<?php
}
}
}
?>
</body>
</html>
