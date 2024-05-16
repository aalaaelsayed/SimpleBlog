<?php
                try{
                  $sql = "SELECT * FROM `posts` WHERE id_cat=?";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute([$catid]); 
                  foreach($stmt->fetchAll() as $result){
                    $x=1;
                              $id  =$result["id"];
                           
                $x++;
                            }
                }catch(PDOException $e){
                  echo "Connection failed: " . $e->getMessage();
                }
              
             
              ?>