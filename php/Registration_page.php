<!DOCTYPE HTML>
<html>  
<body>

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
<p>submission Date 2: <?php echo $_POST["sd2"]?></p> -->
<p>Refrence:<?php echo $_POST["ref"]?></p>
<p>Feedback:<?php echo $_POST["fdb"]?></p>

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
$semester=$_POST["sem"];
$college=$_POST["clg"];
$email=$_POST["email"];
$address=$_POST["add"];
$course=$_POST["course"];
$joiningDate=$_POST["jd"];
$batchTime=$_POST["bt"];
$fees=$_POST["fee"];
$installment1=$_POST["ins1"];
$submissionDate1=$_POST["sd1"];
$installment2=$_POST["ins2"];
$submissionDate2=$_POST["sd2"];
$refrence=$_POST["ref"];
$feedback=$_POST["fdb"];

// Create connection
$conn = new mysqli($servername, $username, $password, "sm");

$sql="INSERT INTO `Registration` (`RegistrationNo`,`Name`, `ContactNo`,`Qualification`,`Semester`,`College`,`Email`,`Address`,`Course`,`Fees`,`Installment1`,`submissionDate1`,`Installment2`,`submissionDate2`,`Refrence`,`Feedback`) VALUES ("."''".",'".$name."','".$contactNo."','".$qualification."','".$semester."','".$college."','".$email."','".$address."','".$course."','".$fees."','".$installment1."','".$submissionDate1."','".$installment2."','".$submissionDate2."','".$refrence."','".$feedback."')";
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
</body>

</html>