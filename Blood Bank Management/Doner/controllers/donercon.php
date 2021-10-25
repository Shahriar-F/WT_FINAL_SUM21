<?php
    require_once 'models/db_config.php';
	$id="";
	$err_id="";
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
	
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["Add"])){
	
		if(empty($_POST["id"])){
			$hasError = true;
			$err_id="Id Required";
		}
		else if(strlen($_POST["id"]) <= 3){
			$hasError = true;
			$err_id="Id must contain >3 character";
		}
		
		else{
			$id =$_POST["id"];
	
		}
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 5){
			$hasError = true;
			$err_name="Name must contain >5 character";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="Username Required";
		}
		
		else{
			$username =$_POST["username"];
	
		}
		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob="Date of Birth Required";
		}
		
		else{
			$dob =$_POST["dob"];
	
		}
		if(empty($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		
		else{
			$gender =$_POST["gender"];
	
		}
		if(empty($_POST["bloodgroup"])){
			$hasError = true;
			$err_bloodgroup="BloodGroup Required";
		}
		
		else{
			$bloodgroup =$_POST["bloodgroup"];
	
		}
		if(empty($_POST["donate"])){
			$hasError = true;
			$err_bloodgroup="Last Donate Date Required";
		}
		
		else{
			$donate =$_POST["donate"];
	
		}
		if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone="Phone Required";
		}
		
		
		else{
			$phone =$_POST["phone"];
	
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		else{
			$password =$_POST["password"];
	
		}
		
		
	
		if(!$hasError){
		
		$rs = insertDoner($id,$name,$username,$dob,$gender,$bloodgroup,$donate,$phone,$password);
		if ($rs === true){
			header("Location: allDoner.php");
		}
		$err_db = $rs;
	
	}
}
		else if(isset($_POST["edit"])){
	     //name
		 if(empty($_POST["id"])){
			$hasError = true;
			$err_id="Id Required";
		}
		
		else{
			$id =$_POST["id"];
	
		}
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="Username Required";
		}
		
		else{
			$username =$_POST["username"];
	
		}
		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob="Date of birth Required";
		}
		
		else{
			$dob =$_POST["dob"];
	
		}
		if(empty($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		
		else{
			$gender =$_POST["gender"];
	
		}
		if(empty($_POST["bloodgroup"])){
			$hasError = true;
			$err_bloodgroup="BloodGroup Required";
		}
		
		else{
			$bloodgroup =$_POST["bloodgroup"];
	
		}
		if(empty($_POST["donate"])){
			$hasError = true;
			$err_donate="Last Donate Date Required";
		}
		
		else{
			$donate =$_POST["donate"];
	
		}
		if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone="Phone Required";
		}
		
		else{
			$phone =$_POST["phone"];
	
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		else{
			$password =$_POST["password"];
	
		}
		if(!$hasError){
			
		$rs = editDoner($_POST["id"],$_POST["name"],$_POST["username"],$_POST["dob"],$_POST["gender"],$_POST["bloodgroup"],$_POST["donate"],$_POST["phone"],$_POST["password"]);
		if($rs === true){
			header("Location: allDoner.php");
		}
		$err_db = $rs;
		}
		
	}
	
	
   
	
	function insertDoner($id,$name,$username,$dob,$gender,$bloodgroup,$donate,$phone,$password){
		$query = "insert into doner values ('$id','$name','$username','$dob','$gender','$bloodgroup','$donate','$phone','$password')";
		return execute($query);
	}
	
	function getDoners($id) {
		$query = "select * from doner";
		$rs = get($query);
		return $rs;
		
	}
	function getDoner($id){
		$query = "select * from doner where id = '$id'";
		$rs = get($query);
		return $rs[0];
		
	}
	
	function editDoner($id,$name,$username,$dob,$gender,$bloodgroup,$donate,$phone,$password){
		$query ="update doner set id='$id',name='$name',username='$username',dob='$dob',gender='$gender',bloodgroup='$bloodgroup',donate='$donate',phone='$phone',password='$password' where id='$id'";
		return execute($query);
	}
	
	 function deleteDoner($id){
		$query ="DELETE FROM doner WHERE id='$id'";
		return execute($query);
	}    
	

	 ?>
	