<?php 
	include 'controllers/donercon.php';
	$id = $_GET["id"];
	$c = getDoner($id);
	
?>
<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    </head>
</html>

<div class="center my-5" >
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="name" value="<?php echo $c["name"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">User Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="username" value="<?php echo $c["username"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Date of Birth:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="dob" value="<?php echo $c["dob"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Gender:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="gender" value="<?php echo $c["gender"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">BloodGroup:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="bloodgroup" value="<?php echo $c["bloodgroup"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Last Donate Date:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="donate" value="<?php echo $c["donate"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">phone:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="phone" value="<?php echo $c["phone"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">password:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="password" value="<?php echo $c["password"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="Submit" name="edit" class="btn btn-success" value="update ok" class="form-control">
		</div>
	</form>
</div>

