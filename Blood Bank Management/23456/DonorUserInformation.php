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
	

     
     <div class="form-group">
<h4 class="text">ID: <?php echo $donor["id"]?></h4>	 
<h4 class="text">Name: <?php echo $donor["name"]?></h4>
<h4 class="text">Username: <?php echo $donor["username"]?></h4>
<h4 class="text">Date of Birth: <?php echo $donor["dob"]?></h4>
<h4 class="text">Gender: <?php echo $donor["gender"]?></h4>
<h4 class="text">Blood Group: <?php echo $donor["bloodgroup"]?></h4>
<h4 class="text">Last Donate date: <?php echo $donor["donate"]?></h4>
<h4 class="text">Phone: <?php echo $donor["phone"]?></h4>

</div>
    
    
	
	
</body>
</html>

<?php include 'main_footer.php';?>