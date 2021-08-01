<?php 
 function searchProduct ($key){
	 $query ="select id,name from product where name like '%$key%'";
	 
	 $rs = get ($query);
	 return $rs;
 }
?>