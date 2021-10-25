<?php
session_start();
if (isset($_SESSION['username'])&& isset($_COOKIE["loggeduser"])){

include 'controllers/users_controllers.php';
	}
	else
	{
		header("Location: LogOut.php");
	}
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
	margin-top: 100px;
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
</head>
<body>
<div class="regform"><h1> Update Information<br/> <p align="center" style="color:red"><?php echo $_COOKIE["loggeduser"];?></p> </h1></div>
<div class="main" align="center">

<h5 class= "text-danger"><?php echo $err_db;?></h5>
<form action="" method="post" class="form-horizontal form-material">


<h4 class="text">Email</h4>
<input type="text" name="gmail" value="<?php echo $gmail;?>" class="form-control">
<span class="text-danger"><?php echo $err_gmail;?></span>
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

<h4 class="text">Address</h4>
<input type="Textarea" name="address" value="<?php echo $address;?>" class="form-control">
<span class="text-danger"><?php echo $err_address;?></span>

<br/><br/>

<h4 class="text">Mobile Number</h4>
<input type="text" name="phone" value="<?php echo $phone;?>" class="form-control">
<span class="text-danger"><?php echo $err_phone;?></span><br>

<br/>
<input type="submit" name="update" class="btn btn-success" value="update" class="form-control"><br>
<br/>
<a href="dashboard.php">Back To Dashboard</a><br>
<a href="Login.php">LogOut</a>
</form>
</div>
</body>
</html>

