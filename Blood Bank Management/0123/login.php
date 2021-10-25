
<?php
session_start();
include 'controllers/users_controllers.php';

?>
<html>
<head>
<style>

*{
	margin:0;
	padding :0;
}
body {

	background-position:center;
	background-size:cover;
	font-family: sans-serif;
	margin-top: 40px;
}
.regform{
	width :420px;
	background-color:rgb(0,0,0,0.6);
	margin:auto;
	color:#FFFFFF;
	padding: 10px 0px 10px 0px;
	text-align:center;
	
}
.loginbox{
	width: 420px;
	height: 420px;
	background-color:rgb(0,0,0,0.6);
	color: #fff;
	top: 50%;
	left:50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}

.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;
	
}

.loginbox input[type="text"], input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background:  transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.loginbox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #fb2525;
	color: #fff;
	font-size: 18px;

}

</style>

<div class="regform"><h1>User Login</h1></div>


<h5 class= "text-danger"><?php echo $err_db;?></h5>


<form action="" method="post" class="form-horizontal form-material">

<body>
<div class="loginbox" align="center">
<p> Username</p>
<input type="text" name="username" value="<?php echo $username;?>" class="form-control">
<span class="text-danger"><?php echo $err_username;?></span>

       
<p>Password<p>
<input type="password" name="password" value="<?php echo $password;?>" class="form-control">
<span class="text-danger"><?php echo $err_password;?></span><br>



<input type="submit" name="btn_login" class="btn btn-danger" value="login" class="form-control"><br>


<a href="ChangePassword.php">Forget Password</a><br>
<a href="RegistrationForm.php">Not Registered Yet? Get Registered</a>
</form>

</div>
</body>
</head>
</html>