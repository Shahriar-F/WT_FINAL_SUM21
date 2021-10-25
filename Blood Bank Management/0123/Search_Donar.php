<?php
session_start();


if (isset($_SESSION['username'])&& isset($_COOKIE["loggeduser"])){

include 'controllers/search_controllers.php';
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
	margin-top: 140px;
}

.regform{
	width :800px;
	background-color:rgb(0,0,0,0.6);
	margin:auto;
	color:#FFFFFF;
	padding: 10px 0px 10px 0px;
	text-align:center;
	
}
table, th, td {
  border: 1px solid black;
  text-align:center;
}
.main{
	background-color:rgb(0,0,0,0.5);
	width:800px;
	margin:auto;
}
</style>
</head>
<body>
<div class="regform"><h1> Search donor </h1></div>
<div class="main" align="center">
<form action="" method="post" class="form-horizontal form-material">

<div class="form-group">
<span class="text">Blood Group</span>
 <select name="bloodgroup"> 
<option value=""  disabled selected>select a blood group</option>
<option value="A">A</option>
<option value="A+">A+</option>
<option value="B">B</option>
<option value="B+">B+</option>
<option value="O+">O+</option>
</select>
<span class="text-danger"><?php echo $err_bloodgroup;?></span>
<span class="text">Area</span>
 <select select name="area">
<option value=""  disabled selected>select a area</option>
<option value="Dhaka">Dhaka</option>
<option value="Cumilla">Cumilla</option>
<option value="Barisal">Barisal</option>
<option value="Rajshahi">Rajshahi</option>
<option value="chottogram">Chottograme</option>
</select>
<span class="text-danger"></span>
<span class="text">Gender</span>
<select select name="gender">
<option value=""  disabled selected>select a Gender</option>
<option value="male">male</option>
<option value="female">female</option>
</select>
<input type="submit" name="search" class="btn btn-success" value="Search" class="form-control">
<span class="text-danger"></span>


</div>
</style>
</head>
<body>
</html>
<br/>
<div align="center">

<?php




if($rs!="")
{
	

	
	?>
	<table>
	
	<tr>
	<th>Name</th>
	<th>Blood Group</th>
	<th>Gmail</th>
	<th>Mobile</th>
	<th>City</th>
	<th>Gender</th>
	
	</tr>
	
	
	<?php
	
	foreach($rs as $a)
	{
		?>
		<tr>
		<td><?php echo $a["name"];?></td>
		<td><?php echo $a["bloodgroup"];?></td>
		<td><?php echo $a["gmail"];?></td>
		<td><?php echo $a["mobile"];?></td>
		<td><?php echo $a["city"];?></td>
		<td><?php echo $a["gender"];?></td>
		
		</tr>
		
		
		<?php
	}
}
else
{
	echo "No data";
}





?>
</table>
</div>
<div class="form-group text-center" align="center">
<a href="dashboard.php">Back To Dashboard</a><br>
<a href="Login.php">LogOut</a>
</div>
</form>
</div>
