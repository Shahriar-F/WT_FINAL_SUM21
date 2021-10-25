<?php
 
     include 'main_header.php';
	 session_start();
	 
$donor="";
if (isset($_SESSION['username'])){

include 'controllers/Donorcontroller.php';
$donor=GetDonor($_SESSION['username']);
	}
	else
	{
		header("Location: login.php");
	} 

?>
<html>
<head></head>
<body>	
<fieldset>
	 <h1 class="text text-center">Home </h1>

    <h4 class="text text-center">Welcome To Donor Homepage,<?php echo $donor["username"]?></h4>	 
     <div class="form-group">
<h4 class="text">Username: <?php echo $donor["username"]?></h4>
</div>
    
    <a href="UpdateDonor.php"> <button> Update Profile  </button> </a> <br> <br>
	<a href="AvailableDonorlist.php"> <button> Available Donor List  </button> </a> <br><br>
	<a href="sendrequest.php"> <button> Send Request  </button> </a> <br><br>
	<a href="reply.php"> <button> Reply  </button> </a> <br><br>
	<a href="alldonor.php"><button> Donor--Information </button> </a> <br> <br>
	<a href="DonorUserInformation.php"><button> User Information1 </button> </a> <br> <br>
	<a href="request_approval.php"> <button> Request Received  </button> </a> <br><br>
	<a href="changepassword.php"> <button> Change password </button> </a> <br>
	<br><br><br>
	
	<a href="rate.php"> <button> Rate Blood Bank    </button> </a>
	<a href="feedback.php"> <button>   Feedback   </button> </a> <br><br>
	
	<a href="logout.php"> <button> Log Out </button> </a> <br>
	
	
</fieldset>	
</body>
</html>

<?php include 'main_footer.php';?>