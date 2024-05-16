<?php
	try{
		$sql = "SELECT * FROM `categories` where id = ? ";
		$stmtcar = $conn->prepare($sql);
		$stmtcar->execute([$id]); 
		$result =$stmtcar ->fetch();
		$cat_name  =$result["category"];
		

	  }catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	
 
	}
  ?>