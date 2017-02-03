<?php  
	session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
     

html { width: 100%; height:100%; overflow:hidden; }

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
<div style="color:white>
</div>
<div class="container">
	<br><br><br>
	<center><h1 style="color:white">Login Page</h1></center>
	<br><br><br><br>
	
	<form class="form-horizontal" action="" method="post">
		
		<div class="form-group">
			<label class="control-label col-sm-4" for="email"  style="font-size:200%; color:white">Email:</label>
			<div class="col-sm-4">
				<input type="email" class="form-control input-lg" id="email" placeholder="Enter email" name="email">
			</div>
		</div>
		<br>
		<div class="form-group">
			<label class="control-label col-sm-4" for="pwd" style="font-size:200%; color:white;">Password:</label>
			<div class="col-sm-4">
				<input type="password" class="form-control input-lg" id="pwd" placeholder="Enter password" name="pwd">
			</div>
		</div>
		<br>
		<div class="form-group">
			<label class="control-label col-sm-4" for="pwd" style="font-size:200%; color:white;">UserName:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control input-lg" id="UserName" placeholder="UserName" name="UserName">
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-4">
				<button type="submit" href="" class="btn btn-primary btn-lg btn-block input-lg">login</button>
			</div>
		</div>
	</form>
</div>


<div style="color:white; font-size:200%; text-align:center;">

<?php
if(isset($_POST["UserName"]))
{
	$servername = "localhost";
	$username = "root";
	$password = "boot";
	$conn = new mysqli($servername, $username, $password, "sm");
	if($_POST!=0)
	{
		
	$email=$_POST["email"];
	$pass=$_POST["pwd"];
	$username1=$_POST["UserName"];
	$sql="SELECT * FROM `login` WHERE `UserName` LIKE  '".$username1."'";
	$result=mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
		if((mysqli_num_rows($result)!=0)&&($row["password"]==$pass))
	{
		$_SESSION['UserName'] = $username1;
		header('Location:shulekh.php');
	}
	else
		echo "Account invalid";	
}
}
if(isset($_GET['Logout']))
{
	session_unregister('UserName');
}
?>	
</div>

</body>
</html>

