<html>
<body>
<form method="post">
<h3>Trial version</h3>
<input type="text"  name="email" >
<input type="submit" name="try" value="trial">
</form>
<?php
include ('dbConnection.php');
if(isset($_POST['try']))
{
	$a=$_POST['email'];
	
$q=mysqli_query($con,"select *from profile where Email=$a");
echo $q;

}
?>
</body>
</html>
