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
        <input type="hidden" class="form-control input-sm" id="registration No" value="<?php echo $_POST["registrationNo"]; ?>" name="registrationNo">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="name"  style="font-size:100%; color:white">Name:</label>
      <div class="col-sm-7">
        <input type="hidden" class="form-control input-sm" id="name"  value="<?php echo $_POST["name"]; ?>" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="email"  style="font-size:100%; color:white">Contact No:</label>
      <div class="col-sm-7">
        <input type="hidden" class="form-control input-sm" id="cno" value="<?php echo $course=$_POST["cno"];?>" name="cno" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="pwd" style="font-size:100%; color:white;">Qualification:</label>
      <div class="col-sm-3">
        <input type="hidden" class="form-control input-sm" id="qa"  value="<?php echo $_POST["qa"]; ?>" name="qa" required>
      </div>
    
	  <label class="control-label col-sm-1" for="pwd" style="font-size:100%; color:white;">College:</label>
      <div class="col-sm-3">
        <input type="hidden" class="form-control input-sm" id="clg"  value="<?php echo $_POST["clg"]; ?>" name="clg" required>
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
        <input type="hidden" class="form-control input-sm" id="email" value="<?php echo $_POST["email"];?>" name="email" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="pwd" style="font-size:100%; color:white;">Address:</label>
      <div class="col-sm-7">
        <input type="hidden" class="form-control input-sm" id="add" value="<?php echo $_POST["add"];?>" name="add" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="email"  style="font-size:100%; color:white">Course:</label>
      <div class="col-sm-7">
        <input type="hidden" class="form-control input-sm" id="course" value="<?php echo $_POST["course"];?>" name="course" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="jd"  style="font-size:100%; color:white">Joining Date:</label>
      <div class="col-sm-7">
        <input type="hidden" class="form-control input-sm" id="jd" value="<?php echo $_POST["jd"];?>" name="jd" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="bt"  style="font-size:100%; color:white">Batch Time:</label>
      <div class="col-sm-7">
        <input type="hidden" class="form-control input-sm" id="bt" value="<?php echo $_POST["pt"];?>" name="bt" required>
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
        <input type="hidden" class="form-control input-sm" id="ref" value="<?php echo $_POST["ref"];?>" name="ref" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="Feedback"  style="font-size:100%; color:white">Feedback:</label>
      <div class="col-sm-7">
        <textarea class="hidden" rows="3" id="fdb"  name="fdb" required></textarea>
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
</body>
</html>