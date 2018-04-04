<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-image:url("slider2.jpg");
	 background-size:100% 100%;
	 background-repeat:no repeat;
    padding: 20px;
}
</style>
</head>
<body>
<?php
$fn=$ln=$coun=$sub="";
$conn = new mysqli("127.0.0.1","root",'');
if(!$conn)
{
    echo "connection failed";
}
$dbhandle=mysqli_select_db($conn,"db");
if(isset($_POST["subb"]))
{
$fn=$_POST["firstname"];
$ln=$_POST["lastname"];
$coun=$_POST["country"];
$sub=$_POST["subject"];
$query="INSERT INTO feedback(first,last,country,subject) VALUES('$fn','$ln','$coun','$sub')";
    $rec2=mysqli_query($conn,$query);
		echo '<script type="text/javascript"> alert("FEEDBACK sent successfull") </script>';
		header('Location:http://localhost/web/index.html');
   }
   ?>
  <h3>Contact Form</h3>

<div class="container">
  <form action="feed.php" method="post">
    <label for="fname"><b>First Name</b></label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">><b>Last Name</b></label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="country"><b>Country</b></label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
	  <option value="india">India</option>
	  <option value="japan">Japan</option>
	  <option value="china">China</option>
    </select>

    <label for="subject"><b>Subject</b></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit"  name="subb" value="Submit FEEDBACK" required>
  </form>
</div>

</body>
</html>
