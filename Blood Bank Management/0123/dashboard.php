<?php
session_start();
$user="";

if (isset($_SESSION['username'])&& isset($_COOKIE["loggeduser"])){

include 'controllers/users_controllers.php';
$user=GetUser($_SESSION['username']);
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
	margin-top: 50px;
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
<div class="regform"><h1> Welcome TO Our System<br/> <p align="center" style="color:red"><?php echo $_COOKIE["loggeduser"];?> </p></h1></div>
<div class="main" align="center">



<h4 class="text"><i>Name&nbsp:&nbsp</i><?php echo $user["name"]?></h4><br>


<h4 class="text"><i>Username&nbsp:&nbsp<i><?php echo $user["username"]?></h4><br>



<h4 class="text"><i>Dob&nbsp:&nbsp</i><?php echo $user["dob"]?></h4><br>



<h4 class="text"><i>Gender&nbsp:&nbsp</i><?php echo $user["gender"]?></h4><br>



<h4 class="text"><i>Profeesion&nbsp:&nbsp</i><?php echo $user["profession"]?></h4><br>


<h4 class="text"><i>Bloodgroup&nbsp:&nbsp</i><?php echo $user["bloodgroup"]?></h4><br>


<h4 class="text"><i>Gmail&nbsp:&nbsp</i><?php echo $user["gmail"]?></h4><br>


<h4 class="text"><i>City&nbsp:&nbsp</i><?php echo $user["city"]?></h4><br>


<h4 class="text"><i>Address&nbsp:&nbsp</i><?php echo $user["address"]?></h4><br>


<h4 class="text"><i>Phone&nbsp:&nbsp<i><?php echo $user["mobile"]?></h4><br>


<a href="Search_Donar.php">Search Donor</a><br>
<a href="Update_Info.php">Update Information</a><br>
<a href="LogOut.php">LogOut</a>

</form>
</div>
</body>
</html>
