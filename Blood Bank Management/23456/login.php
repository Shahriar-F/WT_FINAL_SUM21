<?php 
     include 'main_header.php';
	 session_start();
      setcookie('username','karim',time()+300);
	  include 'controllers/DonorController.php';
?>
<html>
<head>

</head>
<body>

<script>
        function myfunction(){
	
	
	var username=document.getElementById("username").value;
	var password=document.getElementById("password").value;
	
	var error=false;
	var msg="";
	
	if(username==""){
		msg=msg+"username empty ";
		
		error=true;
		
	}
	if(password==""){
		msg=msg+"password empty ";
		
		error=true;
		
	}
	
	
	
	
	
if(error=true){
	alert(msg);
	return false;
}
	
	
		
		
	
}
    </script> 
<!--login starts -->

<div class="center-login">
	<h2 class="text text-center">Login</h2>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material" id="form" onsubmit="myfunction()">
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" value="<?php echo $username;?>" class="form-control" id="username">
			<span class="text-danger" id="err_username"><?php echo $err_username;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password"  class="form-control" id="password">
			<span class="text-danger"><?php echo $err_password;?></span>
		</div>
		<div class="form-group text-center">
			<a href="register.php" > </a>
			<input type="submit" name="btn_login" class="btn btn-danger" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			<a href="changePassword.php">Forgot Password</a><br>
			<a href="register.php" >Sign Up Here</a>
		</div>
	</form>
</div> 

</body>
</html>

 <?php include 'main_footer.php'; ?>
