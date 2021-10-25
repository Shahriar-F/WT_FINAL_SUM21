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
	margin-top: 50px;
}
.main{
	width: 420px;
	height: 300px;
	background: #000;
	color: #fff;
	top: 50%;
	left:50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
.regform{
	width :300px;
	background-color:rgb(0,0,0,0.6);
	margin:auto;
	color:#FFFFFF;
	padding: 10px 0px 10px 0px;
	text-align:center;
	
}
.main{
	background-color:rgb(0,0,0,0.5);
	width:300px;
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
<div class="regform"><h1> Reset Password</h1></div>
<div class="main">
<h5 class= "text-danger"><?php echo $err_db;?></h5>
<form action="" method="post" class="form-horizontal form-material">




<h4 class="text">Username</h4>
<input type="text" name="username" value="" class="form-control">
<span class="text-danger"><?php echo $err_us;?></span>



<h4 class="text">New Password</h4>
<input type="password" name="pass" value="" class="form-control">
<span class="text-danger"><?php echo $err_pass;?></span><br>



<input type="submit" name="reset" class="btn btn-danger" value="reset" class="form-control">
<a href="login.php">Back To Login</a>

</div>
</style>
</head>
<body>
</html>
