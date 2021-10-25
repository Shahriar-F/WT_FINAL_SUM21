<?php
   include 'main_header.php';
   include 'controllers/DonorController.php';

?>

<html>
<head></head>
 <body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" > 
 
    $("#btn").on("click",function(e){
		e.preventDefault();
	})
 
 </script>
   <tr> <td><b>Rating</b> <br> (Please rate blood bank here)</td>
		<div class="form-group">
 
<tr>
<td> <select name="Rate"> 
<option value=""  disabled selected>select a rating</option>
<option value="A">1</option>
<option value="A+">2</option>
<option value="B">3</option>
<option value="B+">4</option>
<option value="O+">5</option>
</select></td>
<!--<input   type=text id="in" > -->
<a href="rate.php"> <button id="btn" > Send  </button> </a>
</tr>
</div>
 </body>
</html>		

<?php include 'main_footer.php';?>