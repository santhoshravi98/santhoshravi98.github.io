<!DOCTYPE HTML>
<html>
<head>
<title>CAB CANCELLATION</title>
</head>
<body>

<?php
$temp=0;
 $con=mysqli_connect("127.0.0.1","root","");
 if(!$con)
{
    echo "connection failed";
}
  
  $dbhandle=mysqli_select_db($con,"db");
  echo "HII. !!! Welcome";
  echo "<br><br><br>";
  if(isset($_POST["sum"]))
{
$temp=$_POST["uid"];
echo '<script type="text/javascript"> alert("CAB CANCELLED successfull") </script>';
}
$query="DELETE FROM book WHERE id='$temp'";
$rec=mysqli_query($con,$query);
mysqli_close($con);
  ?>
  
  <form action="cancel.php" method="post">
  <div>
    <img src="hd.jpg" alt="Avatar">
  </div>
<div>
    <label><b>Enter CAB NUMBER to cancel the CAB:</b></label>
    <input type="text" placeholder="Enter CAB NUMBER" name="uid" required>
	</div>
	<input type="submit"  name="sum" value="Cancel CAB" required>
	</form>
  </body>
  </html>