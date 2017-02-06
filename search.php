<?php 
session_start();
if(isset($_SESSION["UserName"]))
{
 'welcome '.$_SESSION['UserName'].'';
}
else
{
	header('Location:error.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
     

html { width: 100%; height:; overflow:; }

body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}


    </style>
</head>
<body>
	<div class="container">
		<center><h1 style="color:white">Home Page</h1></center>
			<br><br><br><br><br><br>
		</a>
		<form class="form-horizontal" action="" method="post">
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-2">
					<a class="btn" href="search.php">
						<input type="button" value="Home" class="btn btn-primary btn-lg btn-block"></button>
					</a>
				</div>
				<div class="control-label col-sm-8">
					<?php echo '<span style="color:white; font-size:100%;">welcome '.$_SESSION['UserName'].'</span>'; 
					 echo '<span style="color:white; font-size:150%;"><br><a style="color:white" href="test.php?action=Logout">Logout</a></span>'; ?>
				</div>
			</div> 
			<div class="form-group">
				<label class="control-label col-sm-3" for="name"  style="font-size:150%; color:white">Query :</label>
				<div class="col-sm-6">
					<input type="text" class="form-control input-md" id="sr" placeholder="Enter Your Query Here" name="sr">
				</div>
			</div>
	
			<br>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<button type="submit" class="btn btn-primary btn-lg btn-block input-md">Search</button>
				</div>
			</div>
	
			<br><br><br><br><br>
	
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-2">
					<a class="btn" href="Enquiry.php">
						<input type="button" value="Enquiry Form" class="btn btn-primary btn-lg btn-block"></button>
					</a>
				</div>
				<div class="col-sm-offset-1 col-sm-2">
					<a class="btn" href="Registration.php" >
						<input type="button" value="Registration Form" class="btn btn-primary btn-lg btn-block"></button>
					</a>
				</div>
				<div class="col-sm-offset-1 col-sm-3">
					<a class="btn" href="shulekh.php">
						<input type="button" value="Shulekha Form" class="btn btn-primary btn-lg btn-block"></button>
					</a>
				</div>
			</div>
	  
		</form>
	</div>




<?php
$servername = "localhost";
$username = "root";
$password = "boot";
$dbname = "sm";
/*$name=$_POST["Name"];
$contactNo=$_POST["ContactNo"];
$course=$_POST["Course"];
$Refrence=$_POST["Reference"];
$date=$_POST["Date"];
//$course=$_POST["course"];
$feedback=$_POST["fdb"];
*/
$search=$_POST["sr"];


// Create connection
$conn = new mysqli($servername, $username, $password, "sm");
//$sql="SELECT * FROM `enquiry` OR `Registration` WHERE (RegistrationNo='$search' OR Name='$search' OR Course='$search' OR Email='$search' OR ContactNo='$search' OR College='$search' OR Qualification='$search' OR Semester='$search' OR Address='$search' OR PreferredTime='$search' OR JoiningDate='$search' OR Refrence='$search' OR Feedback='$search')";
//$sql="SELECT * FROM `enquiry` OR `Registration` WHERE LIKE Name='%$name%'";
//$sql="SELECT * FROM `enquiry` WHERE Course IN ( Course='$course')";
//$sql="SELECT * FROM `Registration` WHERE Course IN ( Course='$course')";
if(!$_POST["sr"]=null)
{
	echo "<br>";

	$sql = "SELECT * FROM `home` ORDER BY `CallDate` DESC";
}
if($_POST["sr"]!=null)
{
$sql="SELECT * FROM `home` WHERE RegistrationNo LIKE '%$search%' OR Name LIKE '%$search%' OR Course LIKE '%$search%' OR Email LIKE '%$search%' OR ContactNo LIKE '%$search%' OR College LIKE '%$search%' OR Qualification LIKE '%$search%' OR Semester LIKE '%$search%' OR Address LIKE '%$search%' OR Refrence LIKE '%$search%' OR Feedback LIKE '%$search%'";
//$sql1="SELECT * FROM `Enquiry` WHERE RegistrationNo LIKE '%$search%' OR Name LIKE '%$search%' OR Course LIKE '%$search%' OR Email LIKE '%$search%' OR ContactNo LIKE '%$search%' OR College LIKE '%$search%' OR Qualification LIKE '%$search%' OR Semester LIKE '%$search%' OR Address LIKE '%$search%' OR PreferredTime LIKE '%$search%' OR JoiningDate LIKE '%$search%' OR Refrence LIKE '%$search%' OR Feedback LIKE '%$search%'";
// Check connection
echo "Data from Registration  <br>";
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) 
  {
    echo "Name:- ".$row["Name"]. " Course ".$row["Course"]. " Email:- ".$row["Email"]. " Contact No:- ".$row["ContactNo"]. " Fees:- " .$row["Fees"]. "  Installment1:- ".$row["Installment1"]. "  Installment2:- ".$row["Installment2"]. "  Qualification;- ".$row["Qualification"]. "  College:- ".$row["College"]. " Semester:- ".$row["Semester"]. " Refrence:- ".$row["Refrence"]. " Feedback:- ".$row["Feedback"]."<br>";	
    echo "<br>";
	}
} else {
    echo "Error:" . "<br>" . $conn->error;
}
echo "Data from enquiry <br>";
/*
$result = $conn->query($sql1);
if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) {
    echo "Name:- ".$row["Name"]. " Course ".$row["Course"]. " Email:- ".$row["Email"].  "  Address:- ".$row["Address"]. "  PreferredTime;- ".$row["PreferredTime"]. "  JoiningDate:- ".$row["JoiningDate"]. " Refrence:- ".$row["Refrence"]. " Feedback:- ".$row["Feedback"]."<br>";	
    echo "<br>";
	}
} else {
    echo "Error:" . "<br>" . $conn->error;
}
*/
}
$conn->close();
?>



</body>
</html>