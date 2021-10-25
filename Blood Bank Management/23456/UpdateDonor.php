<?php
  include 'main_header.php';
	session_start();
if (isset($_SESSION['username'])){

include 'controllers/Donorcontroller.php';
	}
	else
	{
		header("Location: login.php");
	}
	
?>

<html>
<head>

</head>
<body>
<script>
        function myfunction(){
	
	var donate=document.getElementById("donate").value;
	var phone=document.getElementById("phone").value;
	
	var error=false;
	var msg="";
	
		if(donate==""){
		msg=msg+"donate empty ";
		
		error=true;
		
	}
	
	if(phone==""){
		msg=msg+"phone empty ";
		
		error=true;
		
	}
	

	
	
	
	
if(error=true){
	alert(msg);
	return false;
}
	
	
		
		
	
}
    </script>
  <div class="center_login">
     <h1 class="text text-center">Update Information</h1>
     <h5 class= "text-danger"><?php echo $err_db;?></h5>
   <form action="" method="post" class="form-horizontal form-material" id="form" onsubmit=myfunction()>

      <div class="form-group">
      <h4 class="text">Last Donate</h4>
      <input type="Textarea" name="donate" value="<?php echo $donate;?>" class="form-control" id="donate">
      <span class="text-danger"><?php echo $err_donate;?></span>
    </div>
	
   <div class="form-group">
     <h4 class="text">Phone</h4>
     <input type="text" name="phone" value="<?php echo $phone;?>" class="form-control" id="phone">
     <span class="text-danger"><?php echo $err_phone;?></span>
   </div>

  

    <div class="form-group text-center">
     <input type="submit" name="update" class="btn btn-success" value="Update" class="form-control">
    </div>
	
    <div class="form-group text-center">
     <a href="home.php">Home</a><br>
     <a href="Login.php">LogOut</a>
    </div>
   </form>
  </div>

</body>
</html>
<?php include 'main_footer.php'; ?>