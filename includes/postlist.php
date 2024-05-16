<?php
try{
    $sql = "SELECT * FROM `posts` WHERE publish=1";
    $stmtlist = $conn->prepare($sql);
    $stmtlist->execute(); 
  
  }catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
  }
?>
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Post Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        

        <div class="row">
        <?php
                foreach($stmtlist->fetchAll() as $result){
                    $id  =$result["id"];
                    $title  =$result["title"];
                    $image  =$result["image"];
                    $content =$result["content"];
               
                ?>
          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="images/<?php echo $image;?>" alt="<?php echo $title;?>" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3><?php echo $title;?></h3>
                <div>
                  <p><?php echo $content;?></p>
                  <p><a href="single.php?id=<?php echo $id; ?>" class="btn btn-primary btn-sm" >Read Now</a></p>
                </div>
              </div>
            </div>
          </div>
          <?php
                   }
                   ?>
        
        </div>
      </div>
    </div>
