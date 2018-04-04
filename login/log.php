<!DOCTYPE html>
<html>
<link href="logg.css" type="text/css" rel="stylesheet" />
<body> 
<?php

$conn = new mysqli("127.0.0.1","root",'');
if(!$conn)
{
    echo "connection failed";
}

$dbhandle=mysqli_select_db($conn,"db");

if(isset($_POST["sub"]))
{
  $email=$_POST["uname"];
$pass=$_POST["psw"];
$queryy="SELECT * FROM signup WHERE email='$email' AND password='$pass'";
    $recc=mysqli_query($conn,$queryy);
	
    if(mysqli_num_rows($recc)>0)
      {
echo '<script type="text/javascript"> alert("login successfull") </script>';


header('Location:http://localhost/web/index.html');
      }
      else
      echo '<script type="text/javascript"> alert("Enter correct username and password") </script>';
}
?>



<h2><u>Login Form</u></h2>
<form action="log.php" method="post">
  <div class="imgcontainer">
    <img src="login.jpg" alt="Avatar" class="avatar">
  </div>
<div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <input type="submit" name="sub" value="LOGIN">
    <input type="checkbox" checked="checked"> Remember me
  </div>

 <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>