<?php
include 'main_header.php';
session_start();
include 'controllers/Donorcontroller.php';
	

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
<div class="center_login">
  <h1 class="text text-center">Reset Password</h1>
  <h5 class= "text-danger"><?php echo $err_db;?></h5>
 <form action="" method="post" class="form-horizontal form-material" id="form" onsubmit=myfunction()>



 <div class="form-group">
   <h4 class="text">Username</h4>
   <input type="text" name="username" value="" class="form-control" id="username">
   <span class="text-danger"><?php echo $err_us;?></span>
 </div>

 <div class="form-group">
   <h4 class="text">New Password</h4>
   <input type="password" name="pass" value="" class="form-control" id="password">
   <span class="text-danger"><?php echo $err_pass;?></span>
 </div>

 <div class="form-group text-center">
    <input type="submit" name="reset" class="btn btn-danger" value="reset" class="form-control">
 </div>
</body>
</html>
<?php include 'main_footer.php';?>