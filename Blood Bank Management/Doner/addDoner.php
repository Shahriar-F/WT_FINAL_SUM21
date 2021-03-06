<?php

 require_once 'controllers/donercon.php';
 
?>

<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="editd.css">
    <!--  javaScript validation -->
       <script>
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
                get("err_username").innerHTML = "**Username Required";

            }
            if(get("dob").value == "") {
                hasError = true;
                get("err_dob").innerHTML = "**Date of Birth Required";

            }
            if(get("gender").value == "") {
                hasError = true;
                get("err_gender").innerHTML = "**Gerder Required";

            }
            if(get("bloodgroup").value == "") {
                hasError = true;
                get("err_bloodgroup").innerHTML = "**BloodGroup Required";

            }
            if(get("donate").value == "") {
                hasError = true;
                get("err_donate").innerHTML = "**Last Donate Date Required";

            }
            
            if(get("phone").value == "") {
                hasError = true;
                get("err_phone").innerHTML = "**Phone Required";

            }
            else if(get("phone").value.length <=10 ) {
                hasError = true;
                get("err_phone").innerHTML = "**phone must 11 char ";

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
            get("err_dob").innerHTML ="";
            get("err_gender").innerHTML ="";
            get("err_bloodgroup").innerHTML ="";
            get("err_donate").innerHTML ="";
            get("err_phone").innerHTML ="";
            get("err_password").innerHTML ="";

        }
    </script>   
    

    </head>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
		<h3 align="middle">Add Doner</h3>        
        <form action="" onsubmit="return validate()" method="post">
		<table align="center">

		<tr> 
              <td>Id</td>
              <td>: <input type="text" name="id" id="id" value="<?php echo $id;?>" placeholder="id"></td>
              <td><span id="err_id"><?php echo $err_id; ?></span></td>
			</tr>
            <tr>
              <td>Name</td>
              <td>: <input type="text" name="name" id="name" value="<?php echo $name;?>" placeholder="name"></td>
              <td><span id="err_name"><?php echo $err_name; ?></span></td>
			</tr>
            <tr>
              <td>User Name</td>
              <td>: <input type="text" name="username" id="username" value="<?php echo $username;?>" placeholder="username"></td>
              <td><span id="err_username"><?php echo $err_username; ?></span></td>
			</tr>
            <tr>
              <td>Date of Birth</td>
              <td>: <input type="text" name="dob" id="dob" value="<?php echo $dob;?>" placeholder="dob"></td>
              <td><span id="err_dob"><?php echo $err_dob; ?></span></td>
			</tr>
            <tr>
              <td>Gender</td>
              <td>: <input type="text" name="gender" id="gender" value="<?php echo $gender;?>" placeholder="gender"></td>
              <td><span id="err_gender"><?php echo $err_gender; ?></span></td>
			</tr>
			<tr>
              <td>BloodGroup</td>
              <td>: <input type="text" name="bloodgroup" id="bloodgroup" value="<?php echo $bloodgroup;?>" placeholder="bloodgroup"></td>
              <td><span id="err_bloodgroup"><?php echo $err_bloodgroup; ?></span></td>
			</tr>
            <tr>
              <td>Last Donate Date</td>
              <td>: <input type="text" name="donate" id="donate" value="<?php echo $donate;?>" placeholder="donate"></td>
              <td><span id="err_donate"><?php echo $err_donate; ?></span></td>
			</tr>
			<tr>
              <td>Phone</td>
              <td>: <input type="text" name="phone" id="phone" value="<?php echo $phone;?>" placeholder="phone"></td>
              <td><span id="err_phone"><?php echo $err_phone; ?></span></td>
			</tr>
			<tr>
              <td>Password</td>
              <td>: <input type="text" name="password" id="password" value="<?php echo $password;?>" placeholder="password"></td>
              <td><span id="err_password"><?php echo $err_password; ?></span></td>
			</tr>
			
			
		    <tr>	
             <td><input type="Submit" name="Add" value="Add"></td>
		    </tr>
		</table>
        </form>
        </fieldset>
    </body>
</html>
