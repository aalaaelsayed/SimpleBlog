<?php
	try{
		$sql = "SELECT * FROM `posts` where id = ? ";
		$stmtcar = $conn->prepare($sql);
		$stmtcar->execute([$id]); 
		$result =$stmtcar ->fetch();
		$title  =$result["title"];
		$image  =$result["image"];
		$description =$result["content"];
		$publish =$result["publish"];
		if($publish){
			$publishstr="checked";
		}else{
			$publishstr="";
		}
		$catID =$result["id_cat"];		

	  }catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	
 
	}

//show categories
try{
	$sql = "SELECT * FROM `categories`" ;
	$stmtcat = $conn->prepare($sql);
	$stmtcat->execute(); 
		
  }catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
  }
	  
?>