<?php
	include 'db/db_config.php';
	$donor="";
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$dob="";
	$err_dob="";
	$gender="";
	$err_gender="";
	$bloodgroup="";
	$err_bloodgroup="";
	$donate="";
	$err_donate="";
	$phone="";
	$err_phone="";
	$password="";
	$err_password="";
	
	$err_db="";
	$hasError=false;
	
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username = "Username Required";
		}
		else{
			$username = $_POST["username"];
		}
			if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob="dob Required";
		}
		else{
			$dob = $_POST["dob"];
		}
		
		
		
		
		  
		if(empty($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
	
		
		if(empty($_POST["bloodgroup"])){
			$hasError = true;
			$err_bloodgroup="Blood Group Required";
		}
		else{
			$bloodgroup = $_POST["bloodgroup"];
		}
		if(empty($_POST["donate"])){
			$hasError = true;
			$err_donate="Last Donate Required";
		}
		else{
			$donate = $_POST["donate"];
		}
			
		 if(empty($_POST["phone"])){
			 $hasError=true;
			 $err_phone="invalid phone number";
		 }
		 else if(!is_numeric($_POST["phone"])){
			  
			  $err_phone="invalid phone number";
		 }
		  else{
			 $phone=$_POST["phone"];
		  }
	
	if(empty($_POST["password"])){
			$hasError = true;
			$err_password = "password Required";
		}
		else{
			$password = $_POST["password"];
		}
	
		if(!$hasError){
			$rs = insertdonor($name,$username,$dob,$gender,$bloodgroup,$donate,$phone,$password);
			if ($rs === true){
				header("Location: login.php");
			}
			$err_db = $rs;
		}
	}
		
	
		if (isset($_POST["btn_login"])){
		if(empty($_COOKIE["username"])){
			$hasError = true;
			$err_username = "Username Required";
		}
		else{
			$username = $_COOKIE["username"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password = "Password Required";
		}
		else{
			$password= $_POST["password"];
		}
		
		if(!$hasError){
		if(authenticateDonor($username,$password)){
			$_SESSION['username']=$username;
			header("Location: home.php");
		}
		$err_db="username password invalid";
	}
     
		
	}
	
	if (isset($_POST["update"])){
		
		if(empty($_POST["donate"])){
			$hasError = true;
			$err_donate="donate";
		}
		
		else{
			$donate = $_POST["donate"];
		}
	
	 if(empty($_POST["phone"])){
		$hasError = true;
		$err_phone="phone required";
	}
	
	else{
	     $phone=$_POST["phone"];
		      
		}
		
	 
		 
		

		if(!$hasError){
		$rs = updateDonor($donate,$phone);
		if ($rs === true)
		{
			header("Location: home.php");
		}
		$err_db=$rs;
		
		}
	}
	
		$us=$pass="";
		$err_us=$err_pass="";
	if (isset($_POST["reset"])){
		
		
		$hasError=""; 
		 if(empty($_POST["username"])){
			$hasError = true;
			$err_us="username Required";
		}
		else{
			$us = $_POST["username"];
		}
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass="password Required";
		}
		else{
			$pass = $_POST["pass"];
		}
		
		if(!$hasError){
			Updatepass($us ,$pass);
			header("Location: login.php");
		}
		
	}
function Updatepass($username,$password){
	$query ="update doner set password='$password' where username='$username'";
	return execute($query);
}

function GetDonor($username){
	$query="select * from doner where username='$username'";
	$rs=get($query);
	if(count($rs)>0){
	return $rs[0];
		
	}
	
		
    
}
	
	function authenticateDonor($username,$password){
		$query = "select * from doner where username='$username' and password='$password'";          
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}
	
	function insertDonor($name,$username,$dob,$gender,$bloodgroup,$donate,$phone,$password){
		$query = "insert into doner values (Null,'$name','$username','$dob','$gender','$bloodgroup','$donate','$phone','$password')";
		return execute($query);
		
	}
	
	function checkUsername($username){
		$query = "select name from doner where username='$username'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}
	
	function updateDonor($donate,$phone){
	$donor=$_SESSION['username'];
	$query ="update doner set donate='$donate',phone='$phone' where username='$donor'";
	return execute($query);
	echo $username;
}

	
	
	
?>