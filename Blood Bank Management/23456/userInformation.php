<?php
		include 'main_header.php';
		include 'db/db_config.php';
		$query = "select * from users";
		
		$result = get($query);
		
		
		echo "<table border='1'>";
			echo "<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Username</th>
					<th>Last Donate</th>
					<th>Phone</th>
				  </tr>";
		foreach ($result as $row){
			echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["username"]."</td>";			
				echo "<td>".$row["donate"]."</td>";
				echo "<td>".$row["phone"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	
		include 'main_footer.php';
	
	
	
	
?>