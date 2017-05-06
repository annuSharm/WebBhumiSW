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
  <meta name="viewport" content="width=device-width", initial-scale=1>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
     



    </style>
</head>
<body>
 

<?php

error_reporting(0);
echo '<br>';
$servername = "localhost";
$username = "root";
$password = "boot";
$dbname = "sm";

$RegistrationNo;
$feedback;
if($_POST)
{
$RNo=$_GET["RegNo"];
$fk=$_POST["fdb"];
$ud=$_POST["dat"];
$nm=$_POST["Name"];
}
$conn = new mysqli($servername, $username, $password, "sm");
if ($_POST["submit"])
{
$sql="INSERT INTO `feedback` (`RegistrationNo` , `Feedback_id` , `name` , `feedback` , `updateDate`) VALUE('.$RNo.', '' , '.$nm.', '.$fk.' , '.$ud.')";
echo $sql;
}
if($_POST["af"])
{
	
}
?>
</body>
</html>