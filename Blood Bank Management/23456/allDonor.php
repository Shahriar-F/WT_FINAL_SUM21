<?php 
include 'main_header.php';
      include 'controllers/DonorController.php';
      $donor = GetDonor($username);
?>

<html>
    <head> 
    
    </head>
    <body >
    
    
    <?php
        session_start();
        
        echo $_SESSION['username']
?>
        <fieldset>
		    <h3 align="middle">All Donors</h3>            
            <p align="middle">
			<table >
               <th>Id</th>
			   <th>Name</th>
			   <th>BloodGroup</th>
			   <th>Phone</th>
			   <th>Password</th>
			   
				    
                <?php 
                
                foreach($donor as $d){
                    echo "<tr>";
                    
                        echo "<td>".$d["id"]."</td>";
                        echo "<td>".$d["name"]."</td>";
						echo "<td>".$d["bloodgroup"]."</td>";
						echo "<td>".$d["phone"]."</td>";
						echo "<td>".$d["password"]."</td>";
						
						 
                       
                    echo "</tr>";
                    
                }
                ?>          
            </table>
			</p>
        </fieldset>
    </body>
</html>

<?php include 'main_footer.php';?>