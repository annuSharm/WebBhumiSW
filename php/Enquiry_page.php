<!DOCTYPE HTML>
<html>  
<body>
<?php  echo "<input type=\"text\">" ?>
<p>Registration No:<?php echo $_POST["registrationNo"] ?></p>
<p>Name: <?php echo $_POST["name"]?></p>
<p>Course: <?php echo $_POST["course"]?></p>
<p>Email: <?php echo $_POST["email"]?></p>
<p>Contact No: <?php echo $_POST["cno"]?></p>
<p>College: <?php echo $_POST["clg"]?></p>
<p>Qualification: <?php echo $_POST["qa"]?></p>
<p>Semester: <?php echo $_POST["sem"]?></p>
<p>Address: <?php echo $_POST["add"]?></p>
<p>Preferred Time:<?php echo $_POST["pt"]?></p>
<p>Joining Date: <?php echo $_POST["jd"]?></p>
<p>Refrence:<?php echo $_POST["ref"]?></p>
<p>Feedback:<?php echo $_POST["fdb"]?></p>

<?php
$servername = "localhost";
$username = "root";
$password = "boot";

$RegistrationNo=null;
$name=null;
$course=null;
$email=null;
$contactNo=null;
$college=null;
$qualification=null;
$semester=null;
$address=null;
$preferredTime=null;
$joiningDate=null;
$refrence=null;
$feedback=null;

$RegistrationNo=$_POST["registrationNo"];
if($_POST["name"])
{
	$name=$_POST["name"];
}
if($_POST["course"])
{
	$course=$_POST["course"];	
}

$email=$_POST["email"];
//if($_POST["contactNo"]))
  //{
    //if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['contactNo']))
    //{
      //$error = 'Invalid Number!';
    //}
  //}
  //if (preg_match('/(0[0-9]{9})/', $_POST['cno']))

//{
	//$contactNo=$_POST["cno"];
//}
//else
//{
//echo "invalid contact no";
//}
$contactNo=$_POST["cno"];
$college=$_POST["clg"];
$qualification=$_POST["qa"];
$semester=$_POST["sem"];
$address=$_POST["add"];
$preferredTime=$_POST["pt"];
$joiningDate=$_POST["jd"];
$refrence=$_POST["ref"];
$feedback=$_POST["fdb"];

// Create connection
$conn = new mysqli($servername, $username, $password, "sm");

$sql="INSERT INTO `enquiry` (`RegistrationNo`,`Name`, `Course`,`Email`,`ContactNo`,`College`,`Qualification`,`Semester`,`Address`,`PreferredTime`,`JoiningDate`,`Refrence`,`Feedback`) VALUES (null,'$name','$course','$email','$contactNo','$college','$qualification','$semester','$address','$preferredTime','$joiningDate','$refrence','$feedback')";

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
</body>
</html>