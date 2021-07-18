<?php
 require_once 'db/dbConfig.php';
	$name="";
	$err_name="";
	$hasError=false;
	$err_db="";
		

	function getAllDepartments(){
		$query="select * from departments";
		$rs=get($query);
		return $rs;
	}	
	
?>
