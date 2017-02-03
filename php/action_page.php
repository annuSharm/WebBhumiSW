<!DOCTYPE HTML>
<html>  
<body>

<p>Email: <?php echo $_POST["email"]?></p>
<p>Password: <?php echo $_POST["pwd"]?></p>
<?php
$servername = "localhost";
$username = "root";
$password = "boot";
$email=$_POST["email"];
$pass=$_POST["pwd"];

// Create connection
$conn = new mysqli($servername, $username, $password, "sm");

$sql="SELECT * FROM `login` WHERE (`email`, `password`) VALUES ('$email','$pass')";

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