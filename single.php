<?php
if(isset($_GET["id"])){
  include_once("admin/includes/conn.php");

  $id= $_GET["id"];
    try{
        $sql = "SELECT * FROM `posts` WHERE id=?";
        $stmts = $conn->prepare($sql);
        $stmts->execute([$id]); 
        $result = $stmts->fetch();
        $id  =$result["id"];
        $catid= $result["id_cat"];
        $title  =$result["title"];
        $image  =$result["image"];
        $content =$result["content"];
        $reg	=$result["created_at"];

      
      }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
      }
}
?>
<!doctype html>
<html lang="en">

  <head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

  <!-- header-->
<?php
include_once("includes/header.php");
?>    
<!-- header-->


      
      <?php
        if(isset($_GET["id"])){
    ?>
      <div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">
        
        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-12">

              <div class="intro">
                <h1><strong><?php echo $title; ?></strong></h1>
                <div class="pb-4"><strong class="text-black">Posted on <?php echo $reg; ?></strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>

  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
            <img src="images/<?php echo $image; ?>" alt="<?php echo $title; ?>" class="img-fluid p-3 mb-5 bg-white rounded">
            
            <div class="grey-bg container-fluid">
              <section id="minimal-statistics">
                <div class="row">
                  <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase"><?php echo $title; ?></h4>
                    <p>post Details</p>
                  </div>
                </div>
                <div class="row">
                  
                  
                
                </div>
              </section>              
            </div>

            <p class="lead"> <?php echo $title ; ?></p>

            <blockquote><p><?php echo $content ; ?></p></blockquote>
            <?php
              include_once("includes/comment.php");
?>  
  

              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
                  </div>

                </form>
              </div>
            </div>

          </div>
          <!-- sidebox-->
          <?php

include_once("includes/sidebox.php");

}else{
  include_once("404.php");

}
 
?>

                <!-- sidebox-->
                <!-- footer-->
<?php
include_once("includes/footer.php");

?>
     

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

