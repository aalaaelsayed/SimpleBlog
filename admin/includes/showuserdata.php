<?php
			try{
				$sql = "SELECT * FROM `users`where id =?";
				$stmt5 = $conn->prepare($sql);
				$stmt5->execute([$id]); 
				$result =$stmt5->fetch();
				$fullname=$result["fullname"];
				$user=$result["name"];
				$pass=$result["password"];
				$email=$result["email"];
				$active=$result["active"];
				if($active){
					$publishstr="checked";
				}else{
					$publishstr="";
				}
			  }catch(PDOException $e){
				echo "Connection failed: " . $e->getMessage();
			  }
			  ?>