<?php

include 'controllers/users_controllers.php';

?>
<html>
<head>
<style type="text/css">
*{
	margin:0;
	padding :0;
}
body {

	background-position:center;
	background-size:cover;
	font-family: sans-serif;
	margin-top: 20px;
}
.regform{
	width :500px;
	background-color:rgb(0,0,0,0.6);
	margin:auto;
	color:#FFFFFF;
	padding: 10px 0px 10px 0px;
	text-align:center;
	
}
.main{
	background-color:rgb(0,0,0,0.5);
	width:500px;
	margin:auto;
}
.main input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #fb2525;
	color: #fff;
	font-size: 18px;

}
</style>
<script>
 
function get (id){
	return document.getElementById(id);
}
function validate(){
	var hasError=true;
	if(get("name").value ==""){
		hasError = false;
		get ("err_name").innerHTML ="name req"
	}
	if(get("username").value ==""){
		hasError = false;
		get ("err_username").innerHTML ="username req"
	}
		if(get("password").value ==""){
		hasError = false;
		get ("err_password").innerHTML ="password req"
	}
	if(get("re_type_password").value ==""){
		hasError = false;
		get ("err_re_type_password").innerHTML ="re_type_password req"
	}
	if(get("dob").value ==""){
		hasError = false;
		get ("err_dob").innerHTML ="date  req"
	}
		if(get("gender").value ==""){
		hasError = false;
		get ("err_gender").innerHTML ="gender  req"
	}
	if(get("gmail").value ==""){
		hasError = false;
		get ("err_gmail").innerHTML ="gmail  req"
	}
		if(get("address").value ==""){
		hasError = false;
		get ("err_address").innerHTML ="address  req"
	}
		if(get("phone").value ==""){
		hasError = false;
		get ("err_phone").innerHTML ="phone  req"
		}
	






return hasError;
}
</script>
</head>
<body>
<div class="regform"><h1> REGISTRATION FORM </h1></div>
<div class="main">
<form action="" onsubmit=" return validate()" method="post" class="form-horizontal form-material">

<h4 class="text">Name</h4>
<input id ="name" type="text" name="name" value="<?php echo $name;?>" class="form-control">
<span id="err_name"><?php echo $err_name;?></span>
<br/><br/>

<h4 class="text">Username</h4>
<input id= "username"type="text" name="username" value="<?php echo $username;?>" class="form-control">
<span id="err_username"><?php echo $err_username;echo $err_db;?></span>
<br/><br/>
     
<h4 class="text">Password</h4>
<input id="password" type="password" name="password" value="<?php echo $password;?>" class="form-control">
<span id="err_password"><?php echo $err_password;?></span>
<br/><br/>
<h4 class="text">Re-Type Password</h4>
<input id="re_type_password"  type="password" name="re_type_password" value="<?php echo $re_type_password;?>" class="form-control">
<span id="err_re_type_password" ><?php echo $err_re_type_password;?></span>
<br/><br/>
<h4 class="text">Date Of Birth</h4>
<input id="dob" type="date" name="dob" value="<?php echo $dob;?>" class="form-control">
<span id="err_dob"><?php echo $err_dob;?></span>
<br/><br/>
<h4 class="text">Gender</h4>
<input id="gender"type="radio" value="male" <?php if($gender=="male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="female") echo "checked"; ?> value="female" type="radio"> Female
<span id="err_gender"><?php echo $err_gender;?></span>
<br/><br/>

<tr>
					<h4 class="text">profession</h4>
					<td> <select name="profession">
						<option disabled selected>---Select---</option>
						<option value="Student">Student</option>
                        <option value="BusinessMan">BusinessMan</option>
                        <option value="Worker">Worker</option>
                        <option value="Teacher">Teacher</option>
                   
						<?php
							foreach($array as $p){
								if($p == $profession) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_profession;?> </span></td>
				</tr>

<br/><br/>
<h4 class="text">Blood Group</h4>
<tr>
<td> <select name="bloodgroup"> 
<option value=""  disabled selected>select a blood group</option>
<option value="A">A</option>
<option value="A+">A+</option>
<option value="B">B</option>
<option value="B+">B+</option>
<option value="O+">O+</option>
</select></td>
<td><span class="text-danger"><?php echo $err_bloodgroup;?></span></td>
</tr>
<br/><br/>

<h4 class="text">Email</h4>
<input id="gmail" type="text" name="gmail" value="<?php echo $gmail;?>" class="form-control">
<span id="err_gmail"><?php echo $err_gmail;?></span>
<br/><br/>
     <h4 class="text">Address</h4>
     <textarea id="address" name="address" value="<?php echo $address;?>"></textarea>
     <span id="err_address"><?php echo $err_address;?></span>
 <br/><br/>

<h4 class="text">city</h4>
<tr>
<td> <select name="city"> 
<option value=""  disabled selected>select a city</option>
<option value="Dhaka">Dhaka</option>
<option value="Cumilla">Cumilla</option>
<option value="Barisal">Barisal</option>
<option value="Rajshahi">Rajshahi</option>
<option value="chottogram">Chottograme</option>
</select></td>
<td><span class="text-danger"><?php echo $err_city;?></span></td>
</tr>

 <br/><br/>
<h4 class="text">Mobile Number</h4>
<input id="phone"type="text" name="phone" value="<?php echo $phone;?>" class="form-control">
<span id="err_phone"><?php echo $err_phone;?></span><br>
<br/><br/>
<input type="submit" name="Register" class="btn btn-success" value="Register" class="form-control">
<a href="login.php">Back To Login</a>

</form>
</div>
</body>
</html>
