
<?php
     include 'main_header.php';
	include 'controllers/DonorController.php';
?>
<html>
<head>

</head>
<body>
<script>


function myfunction(){
	function check(x){
		for(var i=0;i<x.length;i++){
			if(x.charAt(i)=='@'){
				return true;
			}
		}
		return false;
	}
	var name=document.getElementById("name").value;
	var username=document.getElementById("username").value;
	var dob=document.getElementById("dob").value;
	//var gender=document.getElementById("gender").value;
	//var bloodgroup=document.getElementById("bloodgroup").value;
	var donate=document.getElementById("donate").value;
	var phone=document.getElementById("phone").value;	
	var password=document.getElementById("password").value;
	
	
	
	
	var error=false;
	var msg="";
	if(name==""){
		msg=msg+"empty name ";
		
		error=true;
		
	}
	if(username==""){
		msg=msg+"username empty ";
		
		error=true;
		
	}
	
	if(dob==""){
		msg=msg+"dob empty ";
		
		error=true;
		
	}
  /*	if(gender==""){
		msg=msg+"gender empty ";
		
		error=true;
		
	}
	if(bloodgroup==""){
		msg=msg+"blood group empty ";
		
		error=true;
		
	}*/
	if(donate==""){
		msg=msg+"donate empty ";
		
		error=true;
		
	}
	if(phone==""){
		msg=msg+"phone empty ";
		
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


<div class="center-login">
	<h1 class="text text-center">Register</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material" id="form" onsubmit="myfunction()">
		
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" name="name" value="<?php echo $name;?>" class="form-control" id="name" >
			<span class="text-danger" id="err_name" ><?php echo $err_name;?></span>
			
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" onfocusout="checkUsername(this)" name="username"  value="<?php echo $username;?>" class="form-control" id="username">
			<span id="err_username" class="text-danger"><?php echo $err_username;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Date of Birth</h4> 
			<input type="text" name="dob" class="form-control" id="dob">
			<span id="err_dob" class="text-danger"><?php echo $err_dob;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Gender</h4> 
			<input type="radio" value="Male" 
			<input type="radio" value="male" <?php if($gender=="male") echo "checked"; ?> name="gender"> Male
			<input name="gender" <?php if($gender=="female") echo "checked"; ?> value="female" type="radio"> Female 
            <span class="text-danger"><?php echo $err_gender;?></span> 
			
		</div>
		<div class="form-group">
			<h4 class="text">Blood Group</h4> 
			<tr>
		
		<td> <input type="radio" value="A+" <?php if($bloodgroup=="A+") echo "checked"; ?> name="bloodgroup"> A+ <br>
             <input type="radio" value="B+" <?php if($bloodgroup=="B+") echo "checked"; ?> name="bloodgroup"> B+ <br>
             <input type="radio" value="AB+" <?php if($bloodgroup=="AB+") echo "checked"; ?> name="bloodgroup"> AB+ <br>
			 <input type="radio" value="O+" <?php if($bloodgroup=="O+") echo "checked"; ?> name="bloodgroup"> O+ <br>
			 <input type="radio" value="A-" <?php if($bloodgroup=="A-") echo "checked"; ?> name="bloodgroup"> A- <br>
			 <input type="radio" value="B-" <?php if($bloodgroup=="B-") echo "checked"; ?> name="bloodgroup"> B- <br>
			 <input type="radio" value="AB-" <?php if($bloodgroup=="AB-") echo "checked"; ?> name="bloodgroup"> AB- <br>
			 <input type="radio" value="O-" <?php if($bloodgroup=="O-") echo "checked"; ?> name="bloodgroup"> O- <br></td>
		<td><span> <?php echo $err_bloodgroup;?> </span></td>
	   </tr>
		</div>
		<div class="form-group">
			<h4 class="text">Last Donate</h4> 
			<input type="text" name="donate" class="form-control" id="donate">
			<span id="err_donate" class="text-danger"><?php echo $err_donate;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Phone</h4> 
			<input type="text" name="phone" class="form-control" id="phone">
			<span id="err_phone" class="text-danger"><?php echo $err_phone;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" class="form-control" id="password">
			<span id="err_password" class="text-danger"><?php echo $err_password;?></span>
		</div>
		
	
		
		
		
		
		
		
		<div class="form-group text-center">
			
			<input type="submit" name="sign_up" class="btn btn-success" value="Sign up" class="form-control">
		</div>
	</form>
</div>

</body>
</html>
<?php include 'main_footer.php'; ?> 