<?php

 require_once 'controllers/usercon.php';
 
?>

<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="uedit.css"> </head>
    <!--  javaScript validation -->
      <!--  <script>
        var hasError=false;
        function get(id) {
            return document.getElementById(id);
        }
        function validate() {
            refresh () ;
            if(get("id").value == "") {
                hasError = true;
                get("err_id").innerHTML = "**Id Required";

            }
            else if(get("id").value.length <=3 ) {
                hasError = true;
                get("err_id").innerHTML = "**Id must 4 digit ";

            }
            if(get("name").value == "") {
                hasError = true;
                get("err_name").innerHTML = "**Name Required";

            }
            else if(get("name").value.length <=8 ) {
                hasError = true;
                get("err_name").innerHTML = "**Name must 8 char ";

            }
            if(get("username").value == "") {
                hasError = true;
                get("err_username").innerHTML = "**User Name Required";

            }
            if(get("gmail").value == "") {
                hasError = true;
                get("err_gmail").innerHTML = "**Email Required";

            }
            
            if(get("password").value == "") {
                hasError = true;
                get("err_password").innerHTML = "**Password Required";

            }
            else if(get("password").value.length <=8 ) {
                hasError = true;
                get("err_password").innerHTML = "**Password must 8 digit ";

            }


            return !hasError;
        }
        function refresh (){
            hasError=false;
            get("err_id").innerHTML ="";
            get("err_name").innerHTML ="";
            get("err_username").innerHTML ="";
            get("err_gmail").innerHTML ="";
            get("err_password").innerHTML ="";

        }
    </script>    -->
    

    
<div class="center_login">
<h1 class="text text-center">Add User</h1>
<h5 class= "text-danger"></h5>
<form action="" method="post" class="form-horizontal form-material">

  <div class="form-group">
<h4 class="text">Name</h4>
<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
<span class="text-danger"><?php echo $err_name;?></span>
</div>
<div class="form-group">
<h4 class="text">Username</h4>
<input type="text" name="username" value="<?php echo $username;?>" class="form-control">
<span class="text-danger"><?php echo $err_username;echo $err_db;?></span>
</div>
      <div class="form-group">
<h4 class="text">Password</h4>
<input type="password" name="password" value="<?php echo $password;?>" class="form-control">
<span class="text-danger"><?php echo $err_password;?></span>
</div>
      <div class="form-group">
<h4 class="text">Re-Type Password</h4>
<input type="password" name="re_type_password" value="<?php echo $re_type_password;?>" class="form-control">
<span class="text-danger"><?php echo $err_re_type_password;?></span>
</div>
<div class="form-group">
<h4 class="text">Date Of Birth</h4>
<input type="date" name="dob" value="<?php echo $dob;?>" class="form-control">
<span class="text-danger"><?php echo $err_dob;?></span>
</div>
<div class="form-group">
<h4 class="text">Gender</h4>
<input type="radio" value="male" <?php if($gender=="male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="female") echo "checked"; ?> value="female" type="radio"> Female
<span class="text-danger"><?php echo $err_gender;?></span>
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
<h4 class="text">Blood Group</h4>
<tr>
<td> <select name="bloodgroup"> 
<option value=""  disabled selected>select a blood group</option>
<option value="A">A</option>
<option value="A+">A+</option>
<option value="B">B</option>
<option value="B+">B+</option>
<option value="O+">O+</option>
</select></td>
<td><span class="text-danger"><?php echo $err_bloodgroup;?></span></td>
</tr>
</div>

     <div class="form-group">
<h4 class="text">Email</h4>
<input type="text" name="gmail" value="<?php echo $gmail;?>" class="form-control">
<span class="text-danger"><?php echo $err_gmail;?></span>
    </div>
     <div class="form-group">
     <h4 class="text">Address</h4>
     <textarea name="address" value="<?php echo $address;?>"></textarea>
     <span class="text-danger"><?php echo $err_address;?></span>
     </div>
 <div class="form-group">
<h4 class="text">city</h4>
<tr>
<td> <select name="city"> 
<option value=""  disabled selected>select a city</option>
<option value="Dhaka">Dhaka</option>
<option value="Cumilla">Cumilla</option>
<option value="Barisal">Barisal</option>
<option value="Rajshahi">Rajshahi</option>
<option value="chottogram">Chottograme</option>
</select></td>
<td><span class="text-danger"><?php echo $err_city;?></span></td>
</tr>
</div>
     <div class="form-group">
<h4 class="text">Mobile Number</h4>
<input type="text" name="phone" value="<?php echo $phone;?>" class="form-control">
<span class="text-danger"><?php echo $err_phone;?></span>
</div>
<div class="form-group text-center">
<input type="Submit" name="Add" value="Add">
</div>
<div class="form-group text-center">


</div>
</form>
</div>
</html>
