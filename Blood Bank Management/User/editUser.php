<?php 
	include 'controllers/usercon.php';
	
    
	
?>

<div class="center_login">
<h1 class="text text-center">Edit User</h1>
<h5 class= "text-danger"><?php echo $err_db;?></h5>
<form action="" method="post" class="form-horizontal form-material">

 <div class="form-group">
<h4 class="text">Email</h4>
<input type="text" name="gmail" value="<?php echo $gmail;?>" class="form-control">
<span class="text-danger"><?php echo $err_gmail;?></span>
</div>
<div class="form-group">
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
</div>

 <div class="form-group">
<h4 class="text">Address</h4>
<input type="Textarea" name="address" value="<?php echo $address;?>" class="form-control">
<span class="text-danger"><?php echo $err_address;?></span>
</div>

 <div class="form-group">
<h4 class="text">Mobile Number</h4>
<input type="text" name="phone" value="<?php echo $phone;?>" class="form-control">
<span class="text-danger"><?php echo $err_phone;?></span>
</div>
<div class="form-group text-center">
<input type="Submit" name="edit"  value="edit" >
</div>
<div class="form-group text-center">

</div>
</form>
</div>


