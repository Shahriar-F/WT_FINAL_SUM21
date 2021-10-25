<?php include'Doner/db/header.php'
?>


<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/user.css">
    </head>
    <body>
     

    <form>
         
   <a href="User/addUser.php">  <input type="button" name="Adduser" value="Adduser"> </a>
   <a href="User/allUser.php">  <input type="button" name="Alluser" value="Alluser"> </a>
   <a href="User/allUser.php">  <input type="button" name="Edituser" value="Edituser"> </a>
   <a href="User/allUser.php">  <input type="button" name="delete" value="DeleteUser"> </a>
   <a href="/Project_2021/index.php">  <input type="button" name="Logout" value="Admin Index"> </a>
   
   
   
   
  </form>

</body>
   
</html>
<?php include 'Doner/db/footer.php'
?>
