<!DOCTYPE html>
<html>
<head>
<title>Book cab </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Book My Trip web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,700,700i" rel="stylesheet">
<!-- //stylesheet -->
</head>
<body class="bg agileinfo">
<?php
$mod=$nam=$dat=$sourc=$destinatio=$clas="";
$adult=$childre=0;
$conn = new mysqli("127.0.0.1","root",'');
if(!$conn)
{
    echo "connection failed";
}
$dbhandle=mysqli_select_db($conn,"db");
if(isset($_POST["boo"]))
{
$mod=$_POST["view"];
$nam=$_POST["name"];
$dat=$_POST["da"];
$sour=$_POST["src"];
$destinatio=$_POST["dest"];
$clas=$_POST["cla"];
$query="INSERT INTO book(mode,name,date,source,destination,class) VALUES('$mod','$nam','$dat','$sour','$destinatio','$clas')";
    $rec2=mysqli_query($conn,$query);
	$temp="SELECT id FROM book WHERE name='$nam'";
	$rec2=mysqli_query($conn,$temp);
	$temp1=mysqli_fetch_assoc($rec2);
	echo $temp1['id'];
		echo $msg;
		echo '<script language="javascript">alert("CAB booked Successfully !!! please note your CAB NUMBER!=  '.$temp1['id'].'"); </script>';
		echo "<script>document.location='$url'</script>";
	//myAlert($msg,"busfli.php");
}
   ?>
  

   <h1 class="agile_head text-center">Book The Cab</h1>
   <p class="text-center">Anytime Booking.</p>
     <div class="container w3">
		<form action="busfli.php" method="post" class="agile_form">
		   <h2 class="w3layouts text-center">Offers a quick and easy way to book cabs online</h2>
		   <ul class="agile_info_select">
				 <li><input type="radio" name="view" id="excellent" value="cabs" required> 
				 	  <label for="excellent">cabs</label>
				      <div class="check w3"></div>
				 </li>
			 <li><input type="radio" name="view" id="neutral" class=" w3l" value="auto" required> 
					 <label for="neutral">auto</label>
				     <div class="check wthree"></div>
			     </li>
			</ul>
			<div class="clear"></div>
			<input type="text" placeholder="Your Name" name="name" class="name agileits" required=""/>
			<input type="text" placeholder="date" name="da" class="name agileits" required=""/>
			<div class="list_agileits_w3layouts">
				<div class="section_class_agileits sec-left" >
				<select name="src">
					<!--<option value="">Source City</option>-->
				<option value="" placeholder="Enter source location" required="">Source Place</option>
					<option value="tnagar">T Nagar</option>
					<option value="annanagar">Anna Nagar</option>
					<option value="kknagar">KK Nagar</option>
					<option value="guindy">Guindy</option>
					<option value="central">Central</option>
					<option value="oorapakkam">Oorapakkam</option>
					<option value="kottur">Kottur</option>
					<option value="teynampet">Teynampet</option>
					
				  </select>
				  </div>
				  
		
				<div class="section_class_agileits sec-left" >
				  <select name="dest">
					<!--<option value="0">Destination City</option>-->
					<option value="" placeholder="Enter Destination location" required="">Destination place</option>
					<option value="Cheupak">Cheupak</option>
					<option value="Egmore">Egmore</option>
					<option value="Tambaram">Tambaram</option>
					<option value="Chrompet">Chrompet</option>
					<option value="Pallavaram">Pallavaram</option>
					<option value="Meenambakkam">Meenambakkam</option>
					<option value="Royapuram">Royapuram</option>
					<option value="Alandur">Alandur</option>
					
				  </select>
				</div>
				<div class="section_class_agileits sec-right">
				  <select name="cla">
					<option value="0">select Mode</option>
					<option value="Any">Any</option>
					<option value="Mini">Mini</option>
					<option value="Micro">Micro</option>
					<option value="Prime">Prime</option>
					<option value="Sedan">Sedan</option>
				  </select>
				</div>	
					
			<div class="submit">
			  <input type="submit" name="boo" value="CONFIRM BOOKING">
			</div>  
		</form>	
		</br>
	<p>	<a href="bill.php"> Show booked CAB </a> </p>
	</div>	
	<div class="agileits_w3layouts_copyright text-center">
			<p>GO CABS !!!!!!</p>
	</div>
<!--start-date-piker-->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- /End-date-piker -->		
</body>
</html>