<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Object Detection</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
     <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/styles.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {

	var y = document.forms["form"]["name"].value;	
	var letters = /^[A-Za-z]+$/;
	if (y == null || y == "") 
	{
		alert("Name must be filled out.");return false;}
var z =document.forms["form"]["mob"].value;
if (z == null || z == "") {alert("mob must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}
var v = grecaptcha.getResponse();
    if(v.length == 0)
    {
        alert("You can't leave Captcha Code empty");
        return false;
    }
    else
    {
       
        return true; 
    }
}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo" style="color:white">Object Detection</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="signin.php" class="pull-right btn sub1" ><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b> Login</b></span></a></div>

<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="panel">
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form method="POST" class="register-form" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
    <div class="form-group">
							<label for="gender"><i class="zmdi zmdi-account material-icons-name"></i></label>
							<select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">&nbsp  Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
</div>							
                            
 <div class="form-group">
                                <label for="mobile"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="mob" id="mob" placeholder="Your Mobile Number"/>
                            </div>

 <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                          
						  </div>

                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="cpassword"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpassword" id="cpassword" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                               <!-- <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>-->
								<div class="g-recaptcha" data-sitekey="6LcZFVEnAAAAAAyZt4cWkPOlCRGY9AQ36ULtLouk"></div>
                            </div>
							
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="image/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link" data-toggle="modal" data-target="#myModal">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<!--Footer start-->
<div class="row footer">
<div class="col-md-4 box">
<a href="../index.php" style="color:white" target="_blank">Home</a>
</div>
<div class="col-md-4 box">
<a href="#" data-toggle="modal" style="color:white" data-target="#developers">Developers</a>
</div>
<div class="col-md-4 box">
<a href="feedback.php" style="color:white" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:black">Developers</span></h4>
      </div>
	  <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/varun1.jpg" width="100px" height="100px" alt="Harshit Kumar" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Varun</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9717421554</h4>
		<h4 style="font-family:'typo' ">varun@gmail.com</h4>
		<h4 style="font-family:'typo' ">Niet,Greater Noida</h4></div></div>
		
		<hr>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/suyash.png" width="100px" height="100px" alt="Vishal Tomar" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Suyash Saini</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 7505837156</h4>
		<h4 style="font-family:'typo' ">Suyash@gmail.com</h4>
		<h4 style="font-family:'typo' ">Niet,Greater Noida</h4></div></div>
		
		<hr>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/rishabh.png" width="100px" height="100px" alt="Yuvraj Singh" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">rishabh saklani</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 7037967427</h4>
		<h4 style="font-family:'typo' ">rishabh@gmail.com</h4>
		<h4 style="font-family:'typo' ">Niet,Greater Noida</h4></div></div>
		
		
		</p>
      </div>

    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog" style="width:950px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:black;">ADMIN LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
	             <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="image/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Admin Login</h2>
  <form role="form" method="post" action="admin.php?q=index.php" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="uname" id="uname" placeholder="Admin User Id"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
