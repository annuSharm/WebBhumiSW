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
  <title>Sulekha</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
     

body { 

	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}

	table, th, td {
    border: 2px solid white;
    border-collapse: collapse;
}
	th, td {
    padding: 5px;
	font-size:150%;
}
th {
    text-align: center;
	background-color:#85344b;
	color:white;
}
td {
color:white; 
text-align:center;
font-size:150%;
}
    </style>
</head>
<body class="container">


	<div>
		<center><h1 style="color:white">Shulekha Page</h1></center>
		<br>
		
		<form class="form-horizontal" action="Shulekh.php" method="post">
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
				<label class="control-label col-sm-2" style="font-size:100%; color:white;">Name:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm" id="Name" placeholder="Enter Name " name="Name" >
				</div>
				<label class="control-label col-sm-2" style="font-size:100%; color:white;">Contact No:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm" id="ContactNo" placeholder="Enter semester " name="ContactNo" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" style="font-size:100%; color:white;">Course:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm" id="Course" placeholder="Enter Course " name="Course" >
				</div>
				<label class="control-label col-sm-2" style="font-size:100%; color:white;">Refrence:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm" id="Ref" placeholder="Enter Refrence " name="Ref" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" style="font-size:100%; color:white;">Date:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm" id="Date" placeholder="Enter Date " name="Date" >
				</div>
				<label class="control-label col-sm-2" style="font-size:100%; color:white;">Call Date:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm" id="CDate" placeholder="Enter Call Date " name="CDate" >
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="control-label col-sm-2" for="Feedback1"  style="font-size:100%; color:white">Feedback:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control input-sm" id="fdb" placeholder="Enter Feedback" name="fdb">
				</div>
				<div class="col-sm-offset-1 col-sm-1">
					<input type="submit" value="search" class="btn btn-primary btn-sm btn-block"></button>
				</div>
			</div>
			<div class="form-group">
				
			</div>	
		</form>
	</div>
	

<div style="color:white;">
<?php
echo date('d-m-y');
$servername = "localhost";
$username = "root";
$password = "boot";
$dbname = "sm";
$name=$_POST["Name"];
$contactNo=$_POST["ContactNo"];
$course=$_POST["Course"];
$Refrence=$_POST["Ref"];
$date=$_POST["Date"];
//$course=$_POST["CDate1"];
$feedback=$_POST["fdb"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM `registration` ORDER BY `Fees` DESC";
$sql1="SELECT * FROM `enquiry` WHERE ";
$andd=0;

$result1 = $conn->query($sql1);
// Check connection
	
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



//test begin 
if($_POST["Name"]!=null)
{
	if($andd==0)
	{
		$sql1="SELECT * FROM `enquiry` WHERE "+$_POST["Name"];
		if ($result1->num_rows > 0) 
		{
			echo '<div class="row"><div class="col-md-12"><table style="width:100%;">';
			echo "<tr><th>RegistrationNo</th><th>Name</th><th>ContactNo</th><th>Course</th><th>Email ID</th><th>College</th><th>Reference</th><th>Feedback</th><th>Date</th><th>Call Date</th></tr>";

				while($row = $result1->fetch_assoc()) 
				{
					echo "<tr> <td>". $row["RegistrationNo"]. "</td> <td>". $row["Name"]. "</td>  <td>". $row["ContactNo"]. "</td> <td>". $row["Course"]. "</td> <td>". $row["Email"]. "</td> <td>". $row["College"]. "</td>   <td>". $row["Refrence"]."</td> <td>". $row["Feedback"]. "</td><td>". $row["JoiningDate"]. "</td></tr>";	
					echo "<br>";
				}
		}
		else 
		{
			echo "Error:" . "<br>" . $conn->error;
		}
		$andd=1;
	}
	else
	{
		$sql1=$sql1+$andd+$_POST["Name"];
		if ($result1->num_rows > 0) 
		{
			echo '<div class="row"><div class="col-md-12"><table style="width:100%;">';
			echo "<tr><th>RegistrationNo</th><th>Name</th><th>ContactNo</th><th>Course</th><th>Email ID</th><th>College</th><th>Reference</th><th>Feedback</th><th>Date</th><th>Call Date</th></tr>";

				while($row = $result1->fetch_assoc()) 
				{
					echo "<tr> <td>". $row["RegistrationNo"]. "</td> <td>". $row["Name"]. "</td>  <td>". $row["ContactNo"]. "</td> <td>". $row["Course"]. "</td> <td>". $row["Email"]. "</td> <td>". $row["College"]. "</td>   <td>". $row["Refrence"]."</td> <td>". $row["Feedback"]. "</td><td>". $row["JoiningDate"]. "</td></tr>";	
					echo "<br>";
				}
		}
		else 
		{
			echo "Error:" . "<br>" . $conn->error;
		}
	}	
}

if($_POST["ContactNo"]!=null)
{
	if($andd==0)
	{
		$sql1=$sql1+$_POST["ContactNo"];
		if ($result1->num_rows > 0) 
		{
			echo '<div class="row"><div class="col-md-12"><table style="width:100%;">';
			echo "<tr><th>RegistrationNo</th><th>Name</th><th>ContactNo</th><th>Course</th><th>Email ID</th><th>College</th><th>Reference</th><th>Feedback</th><th>Date</th><th>Call Date</th></tr>";

				while($row = $result1->fetch_assoc()) 
				{
					echo "<tr> <td>". $row["RegistrationNo"]. "</td> <td>". $row["Name"]. "</td>  <td>". $row["ContactNo"]. "</td> <td>". $row["Course"]. "</td> <td>". $row["Email"]. "</td> <td>". $row["College"]. "</td>   <td>". $row["Refrence"]."</td> <td>". $row["Feedback"]. "</td><td>". $row["JoiningDate"]. "</td></tr>";	
					echo "<br>";
				}
		}
		else 
		{
			echo "Error:" . "<br>" . $conn->error;
		}
		$andd=1;
	}
	else
	{
		$sql1=$sql1.$andd.$_POST["ContactNo"];
		if ($result1->num_rows > 0) 
		{
			echo '<div class="row"><div class="col-md-12"><table style="width:100%;">';
			echo "<tr><th>RegistrationNo</th><th>Name</th><th>ContactNo</th><th>Course</th><th>Email ID</th><th>College</th><th>Reference</th><th>Feedback</th><th>Date</th><th>Call Date</th></tr>";

				while($row = $result1->fetch_assoc()) 
				{
					echo "<tr> <td>". $row["RegistrationNo"]. "</td> <td>". $row["Name"]. "</td>  <td>". $row["ContactNo"]. "</td> <td>". $row["Course"]. "</td> <td>". $row["Email"]. "</td> <td>". $row["College"]. "</td>   <td>". $row["Refrence"]."</td> <td>". $row["Feedback"]. "</td><td>". $row["JoiningDate"]. "</td></tr>";	
					echo "<br>";
				}
		}
		else 
		{
			echo "Error:" . "<br>" . $conn->error;
		}
	}	
}

if($_POST["Course"]!=null)
{
	if($andd==0)
	{
		$sql1=$sql1.$_POST["Course"];
		if ($result1->num_rows > 0) 
		{
			echo '<div class="row"><div class="col-md-12"><table style="width:100%;">';
			echo "<tr><th>RegistrationNo</th><th>Name</th><th>ContactNo</th><th>Course</th><th>Email ID</th><th>College</th><th>Reference</th><th>Feedback</th><th>Date</th><th>Call Date</th></tr>";

				while($row = $result1->fetch_assoc()) 
				{
					echo "<tr> <td>". $row["RegistrationNo"]. "</td> <td>". $row["Name"]. "</td>  <td>". $row["ContactNo"]. "</td> <td>". $row["Course"]. "</td> <td>". $row["Email"]. "</td> <td>". $row["College"]. "</td>   <td>". $row["Refrence"]."</td> <td>". $row["Feedback"]. "</td><td>". $row["JoiningDate"]. "</td></tr>";	
					echo "<br>";
				}
		}
		else 
		{
			echo "Error:" . "<br>" . $conn->error;
		}
		$andd=1;
	}
	else
	{
		$sql1=$sql1.$_POST["Course"];
		if ($result1->num_rows > 0) 
		{
			echo '<div class="row"><div class="col-md-12"><table style="width:100%;">';
			echo "<tr><th>RegistrationNo</th><th>Name</th><th>ContactNo</th><th>Course</th><th>Email ID</th><th>College</th><th>Reference</th><th>Feedback</th><th>Date</th><th>Call Date</th></tr>";

				while($row = $result1->fetch_assoc()) 
				{
					echo "<tr> <td>". $row["RegistrationNo"]. "</td> <td>". $row["Name"]. "</td>  <td>". $row["ContactNo"]. "</td> <td>". $row["Course"]. "</td> <td>". $row["Email"]. "</td> <td>". $row["College"]. "</td>   <td>". $row["Refrence"]."</td> <td>". $row["Feedback"]. "</td><td>". $row["JoiningDate"]. "</td></tr>";	
					echo "<br>";
				}
		}
		else 
		{
			echo "Error:" . "<br>" . $conn->error;
		}
	}	
}


//test end

//echo "<tr> <td>". $row["RegistrationNo"]. "</td> <td>". $row["Name"]. "</td> <td>" . $row["Fees"] . "</td> <td>". $row["ContactNo"]. "</td> <td>". $row["Email"]. "</td> <td>". $row["College"]. "</td>   <td>". $row["Refrence"]."</td> <td>". $row["Feedback"]. "</td></tr>";

$result = mysqli_query($conn, $sql);
echo '<div class="row"><div class="col-md-12"><table style="width:100%;">';
echo "<tr><th>RegistrationNo</th><th>Name</th><th>Fee</th><th>ContactNo</th><th>Email ID</th><th>College</th><th>Reference</th><th>Feedback</th></tr>";

	if (mysqli_num_rows($result)>0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
	{
         echo "<tr> <td>". $row["RegistrationNo"]. "</td> <td>". $row["Name"]. "</td> <td>" . $row["Fees"] . "</td> <td>". $row["ContactNo"]. "</td> <td>". $row["Email"]. "</td> <td>". $row["College"]. "</td>   <td>". $row["Refrence"]."</td> <td>". $row["Feedback"]. "</td></tr>";
		 echo "<br>";
	}
} 
else 
{
     echo "0 results";
}

echo"</table></div></div>";

$conn->close();
?>  


</div>
</div>
</body>
</html>