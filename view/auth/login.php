<?php 
    session_start();
    require __DIR__ . "/../../controller/auth/login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style-login.css">
    <title>Login</title>
</head>
<body>


 <!----------------------- Main Container -------------------------->

 <div class="container d-flex justify-content-center align-items-center min-vh-100">

<!----------------------- Login Container -------------------------->

   <div class="row border rounded-5 p-3 bg-white shadow box-area">

<!--------------------------- Left Box ----------------------------->

   <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
       <div class="featured-image mb-3">
        <img src="/assets/images/image1.png" class="img-fluid" style="width: 250px;">
       </div>
       <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
       <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Developers on this platform.</small>
   </div> 

<!-------------------- ------ Right Box ---------------------------->
    
   <div class="col-md-6 right-box">
      <div class="row align-items-center">
            <div class="header-text mb-4">
                 <h2>Hello,Again</h2>
                 <p>We are happy to have you back.</p>
                 <?php if(isset($_SESSION['error'])){ ?>
                                            <p style="color:red;"><?php echo$_SESSION['error']?><p>
                                        <?php } ?>
            </div>
            <form action="/controller/auth/login.php" method="POST">

            <div class="input-group mb-3">
                <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Login">
            </div>
            <div class="input-group mb-1">
                <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
            </div>
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
            </div>
            </form>
            
            <div class="row">
                <small>Don't have account? <a href="/view/auth/register.php">Sign Up</a></small>
            </div>
      </div>
   </div> 

  </div>
</div>
<?php
session_unset();
include_once "../../layout/footer.php";
?>
