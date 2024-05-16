<?php
if($_SERVER["REQUEST_METHOD"] ==="POST"){
    if(isset($_POST["register"])){
    include_once("includes/conn.php");
    $fullname =$_POST["fullnam"];
    $pass =password_hash($_POST["passwor"],PASSWORD_DEFAULT);
    $email =$_POST["emai"];
    $user =$_POST["nam"];
    try{
        $sql = "INSERT INTO `users`( `email`, `fullname`, `password`, `name`) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email, $fullname ,$pass,$user]); 
        header("Location: login.php");
            die();
    echo "data inserted successfully";
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    }elseif(isset($_POST["login"])){
        session_start();
        if(isset($_SESSION["logged"]) && $_SESSION["logged"]){
        
          }
          include_once("includes/conn.php");
          try{
            $pass =$_POST["Password"];
            $userlogin =$_POST["username"];
              $sql = "SELECT `password` FROM `users` WHERE `name`= ? and active = 1";
              $stmt2 = $conn->prepare($sql);
              $stmt2->execute([$userlogin]); 
              if($stmt2 ->rowCount() > 0){
                  $t = $stmt2 ->fetch();
                  $hash = $t["password"]; 
                  $verify = password_verify($pass,$hash);
                  if($verify){
                    $_SESSION["logged"] = true;
                    $_SESSION["name_id"]=$userlogin;
                      header("Location: users.php");
                      die();
                  }else{
                      echo "password is false";
                  }
              }else{
                $x=  "not found please Review your permissions with the admin";
                echo $x;

              }
             
          }catch(PDOException $e){
              echo "Connection failed: " . $e->getMessage();
          }  
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rent Car Admin | Login/Register</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST"  enctype="multipart/form-data">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required=""  name="Password" />
              </div>
              <div>               
              <input type="submit" name="login" value ="login">

                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />


                <div>
                  <h1><i class="fa fa-car"></i></i> Simple Blog System</h1>
                  <p>©2016 All Rights Reserved. Simple Blog System is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST"  enctype="multipart/form-data">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Fullname" required="" name="fullnam"/>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="nam" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="emai"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required=""  name="passwor"/>
              </div>
              <div>
              <input type="submit" name="register" value ="register">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-car"></i></i> Simple Blog System</h1>
                  <p>©2016 All Rights Reserved. Simple Blog System is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
