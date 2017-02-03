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
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
     

html { width: 100%;  }

body { 
	
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
	background-repeat: no-repeat;
}


    </style>
</head>
<body>
<div class="container">
	<center><h1 style="color:white">Registration form</h1></center>
	<br>
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
		<br><br><br>
    <div class="form-group">
      <label class="control-label col-sm-3" for="email"  style="font-size:100%; color:white">Registration No:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="registration No" placeholder="" name="registrationNo">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="name"  style="font-size:100%; color:white">Name:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="name" placeholder="Enter Name" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="email"  style="font-size:100%; color:white">Contact No:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="cno" value="<?php echo $_POST["name"];?>" name="cno" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="pwd" style="font-size:100%; color:white;">Qualification:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control input-sm" id="qa" placeholder="Enter Qualification " name="qa" required>
      </div>
    
	  <label class="control-label col-sm-1" for="pwd" style="font-size:100%; color:white;">College:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control input-sm" id="clg" placeholder="Enter College Name " name="clg" required>
      </div>
	  </div>
      <!--<label class="control-label col-sm-1" for="pwd" style="font-size:100%; color:white;">Sem:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control input-sm" id="sem" placeholder="Enter semester " name="sem" required>
      </div>
	  </div>
	  
	  <div class="form-group">
    <label class="control-label col-sm-3" for="pwd" style="font-size:100%; color:white;">College:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="clg" placeholder="Enter College Name" name="clg" required>
      </div>
    </div>
	-->
	<div class="form-group">
      <label class="control-label col-sm-3" for="email"  style="font-size:100%; color:white">Email:</label>
      <div class="col-sm-7">
        <input type="email" class="form-control input-sm" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="pwd" style="font-size:100%; color:white;">Address:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="add" placeholder="Enter Address " name="add" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="email"  style="font-size:100%; color:white">Course:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="course" placeholder="Enter Course Name" name="course" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="jd"  style="font-size:100%; color:white">Joining Date:</label>
      <div class="col-sm-7">
        <input type="date" class="form-control input-sm" id="jd" placeholder="Enter Joining Date" name="jd" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="bt"  style="font-size:100%; color:white">Batch Time:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="bt" placeholder="Enter Batch Time" name="bt" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd" style="font-size:100%; color:white;">Fees:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="fee" placeholder="Enter Total Fee" name="fee" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="PaidFee" style="font-size:100%; color:white;">Paid Fee:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="PaidFee" placeholder="Paid Fee " name="PaidFee" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="nid" style="font-size:100%; color:white;">Next Installment:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="nid" placeholder=" Date Of Next Installment" name="nid" >
      </div>
    </div>
	<!--
	<div class="form-group">
      <label class="control-label col-sm-3" for="pwd" style="font-size:100%; color:white;">Installment2:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="ins2" placeholder="Installment2 submitted" name="ins2" >
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="pwd" style="font-size:100%; color:white;">Submission Date 2 :</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="sd2" placeholder="Submission Date " name="sd2" >
      </div>
    </div>
	-->
	<div class="form-group">
      <label class="control-label col-sm-3" for="name"  style="font-size:100%; color:white">Refrence:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control input-sm" id="ref" placeholder="Enter Refrence" name="ref" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="Feedback"  style="font-size:100%; color:white">Feedback:</label>
      <div class="col-sm-7">
        <textarea class="form-control input-sm" rows="3" id="fdb" placeholder="Enter Feedback" name="fdb" required></textarea>
      </div>
    </div>
	
	<div class="form-group">
      <div class="col-sm-offset-4 col-sm-4">
	  <?php ?>
        <button type="submit" class="btn btn-primary btn-md btn-block input-md">submit</button>
      </div>
    </div>
    
  </form>
</div>

<div style="color:white;">

<!-- <p>Registration No:<?php echo $_POST["registrationNo"] ?></p>
<p>Name: <?php echo $_POST["name"]?></p>
<p>Contact No: <?php echo $_POST["cno"]?></p>
<p>Qualification: <?php echo $_POST["qa"]?></p>
<p>Semester: <?php echo $_POST["sem"]?></p>
<p>College: <?php echo $_POST["clg"]?></p>
<p>Email: <?php echo $_POST["email"]?></p>
<p>Address: <?php echo $_POST["add"]?></p>
<p>Course: <?php echo $_POST["course"]?></p>
<p>Joining Date: <?php echo $_POST["jd"]?></p>
<p>Batch Time: <?php echo $_POST["bt"]?></p>
<p>Fees: <?php echo $_POST["fee"]?></p>
<p>Installment1: <?php echo $_POST["ins1"]?></p>
<p>submission Date 1: <?php echo $_POST["sd1"]?></p>
<p>Installment2: <?php echo $_POST["ins2"]?></p>
<p>submission Date 2: <?php echo $_POST["sd2"]?></p> 
<p>Refrence:<?php echo $_POST["ref"]?></p>
<p>Feedback:<?php echo $_POST["fdb"]?></p>-->

 <?php
$servername = "localhost";
$username = "root";
$password = "boot";

$RegistrationNo=$_POST["registrationNo"];
if($_POST["name"])
{
	$name=$_POST["name"];
}
if($_POST["cno"])
{
	$contactNo=$_POST["cno"];	
}

$qualification=$_POST["qa"];
//$semester=$_POST["sem"];
$college=$_POST["clg"];
$email=$_POST["email"];
$address=$_POST["add"];
$course=$_POST["course"];
$joiningDate=$_POST["jd"];
$batchTime=$_POST["bt"];
$fees=$_POST["fee"];
$paidfee=$_POST["paidFee"];
$NextID=$_POST["nid"];
//$installment2=$_POST["ins2"];
//$submissionDate2=$_POST["sd2"];
$refrence=$_POST["ref"];
$feedback=$_POST["fdb"];

// Create connection
$conn = new mysqli($servername, $username, $password, "sm");

$sql="INSERT INTO `Home` (`RegistrationNo`,`Name`, `ContactNo`,`Qualification`,`College`,`Email`,`Address`,`Course`,`Fee`,`PaidFee`,`NID`,`Refrence`,`Feedback`) VALUES ("."''".",'".$name."','".$contactNo."','".$qualification."','".$college."','".$email."','".$address."','".$course."','".$fees."','".$paidfee."','".$NextID."','".$refrence."','".$feedback."')";
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
   header('Location:Enquiry.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

</div>

</body>
</html>
