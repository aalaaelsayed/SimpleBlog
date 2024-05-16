<?php
	include_once("admin/includes/conn.php");
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Simple Blog System &mdash; POst detail</title>
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

      
      <div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">
        
        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

              <div class="intro">
                <h1><strong>Listings</strong></h1>
                <div class="custom-breadcrumbs"><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>Listings</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>
  



      

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Post Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        
        <?php
try{
    $sql = "SELECT * FROM `posts` WHERE publish=1";
    $stmtlist = $conn->prepare($sql);
    $stmtlist->execute(); 
  
  }catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
  }
?>
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
              
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  
                </div>
                <div>
                  <p><?php echo $content;?>.</p>
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
    </div>

    



      
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

