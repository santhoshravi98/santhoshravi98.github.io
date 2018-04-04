<!DOCTYPE HTML>
<html>
<head>
<title>CAB INFO</title>
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
}
$query="SELECT * FROM book WHERE id='$temp'";
$rec=mysqli_query($con,$query);
while($rec1=mysqli_fetch_assoc($rec))
{
    echo "<tr>";
    echo "Your CAB NUMBER:: <td><strong>" .$rec1['id']."</strong></td>";echo "<br>";
	echo "Mode of CAB :: <td><strong>" .$rec1['mode']."</strong></td>";echo "<br>";
    echo "Passenger Name :: <td><strong>" .$rec1['name']."</strong></td>";echo "<br>";
    echo "Date of Travel :: <td><strong>" .$rec1['date']."</strong></td>";echo "<br>";
    echo "source place :: <td><strong>" .$rec1['source']."</strong></td>";echo "<br>";
    echo "Destination place :: <td><strong>" .$rec1['destination']."</strong></td>";echo "<br>";
    echo "Class : <td><strong>" .$rec1['class']."</strong></td>";echo "<br>";
     

echo "<tr>";echo "</tr>";
            echo "<tr>";echo "</tr>";
            echo "This is the generated CAB DETAILS !! Happy journey FROM GOCABS !! thanks for booking !!!";
            echo "<br>";

}

  mysqli_close($con);
  ?>
  
  <form action="bill.php" method="post">
  <div>
    <img src="1.jpeg" alt="Avatar">
  </div>
<div>
    <label><b>Enter CAB NUMBER:</b></label>
    <input type="text" placeholder="Enter CAB NUMBER" name="uid" required>
	</div>
	<input type="submit"  name="sum" value="Show CAB" required>
	</form>
  </body>
  </html>