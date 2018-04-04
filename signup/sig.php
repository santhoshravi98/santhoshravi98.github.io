<!DOCTYPE html>
<html>
<link href="sigg.css" type="text/css" rel="stylesheet" />
<body>
<?php
$na=$ema=$passwo="";
$mobi=0;
$con= new mysqli("127.0.0.1","root",'');
if(!$con)
{
    echo "connection failed";
}
$dbhandl=mysqli_select_db($con,"db");
if(isset($_POST["b"]))
{
	$na=$_POST["nam"];
$mobi=$_POST["num"];
$ema=$_POST["email"];
$passwo=$_POST["psw"];
$query="INSERT INTO signup(name,mobile,email,password) VALUES('$na','$mobi','$ema','$passwo')";
    $rec=mysqli_query($con,$query);
	echo '<script type="text/javascript"> alert("The registration for user !done successfully") </script>';
	header('Location:http://localhost/web/index.html');
   }
   ?>

<h2>Signup Form</h2>

<form action="sig.php" method="post" style="border:1px solid #ccc">
  <div class="container">
  <label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="nam" required>
	
	<label><b>Mobile</b></label>
	</br>
    <input type="number" placeholder="Enter Number" name="num" required>
	</br>
	</br>
	
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="b">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
