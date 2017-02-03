<!DOCTYPE HTML>
<html>  
<body>

<p>You Want to Search: <?php echo $_POST["sr"]?></p>


<?php
$servername = "localhost";
$username = "root";
$password = "boot";

$search=$_POST["sr"];


// Create connection
$conn = new mysqli($servername, $username, $password, "sm");
//$sql="SELECT * FROM `enquiry` OR `Registration` WHERE (RegistrationNo='$search' OR Name='$search' OR Course='$search' OR Email='$search' OR ContactNo='$search' OR College='$search' OR Qualification='$search' OR Semester='$search' OR Address='$search' OR PreferredTime='$search' OR JoiningDate='$search' OR Refrence='$search' OR Feedback='$search')";
//$sql="SELECT * FROM `enquiry` OR `Registration` WHERE LIKE Name='%$name%'";
//$sql="SELECT * FROM `enquiry` WHERE City IN ( Course='$course')";
//$sql="SELECT * FROM `Registration` WHERE Course IN ( Course='$course')";

$sql="SELECT * FROM `Registration` WHERE RegistrationNo LIKE '%$search%' OR Name LIKE '%$search%' OR Course LIKE '%$search%' OR Email LIKE '%$search%' OR ContactNo LIKE '%$search%' OR College LIKE '%$search%' OR Qualification LIKE '%$search%' OR Semester LIKE '%$search%' OR Address LIKE '%$search%' OR Refrence LIKE '%$search%' OR Feedback LIKE '%$search%'";
$sql1="SELECT * FROM `Enquiry` WHERE RegistrationNo LIKE '%$search%' OR Name LIKE '%$search%' OR Course LIKE '%$search%' OR Email LIKE '%$search%' OR ContactNo LIKE '%$search%' OR College LIKE '%$search%' OR Qualification LIKE '%$search%' OR Semester LIKE '%$search%' OR Address LIKE '%$search%' OR PreferredTime LIKE '%$search%' OR JoiningDate LIKE '%$search%' OR Refrence LIKE '%$search%' OR Feedback LIKE '%$search%'";
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

$conn->close();
?>

</body>
</html>