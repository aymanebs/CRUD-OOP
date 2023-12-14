<?php
    session_start();
    require __DIR__ ."/../../controller/auth/register.php";
    include_once "../../layout/header.php";
 ?>


<div class="row">

            <div class="col-md-3 register-left">
                <a href="/view/auth/login.php" class="btnlogin w-100 fs-6" style="text-decoration: none; display: block; text-align: center;">Login</a>
                <br />
            </div>

            <div class="col-md-9 register-right">
                <br><br>
                <div class="tab-content" id="myTabContent">
                    
                        
                        <form action="/controller/auth/register.php" method="POST" id="form">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group  ">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="username *" value="" />
                                        <?php if(isset($_SESSION['alert'])){ if($_SESSION['alert']=="empty field"){ ?>
                                            <p><?php echo"empty field"?><p>
                                        <?php }} ?>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Password *" value="" />
                                        <?php if(isset($_SESSION['alert-password'])){ if($_SESSION['alert-password']=="empty field"){ ?>
                                            <p><?php echo"empty field"?><p>
                                        <?php }} ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="password2" name="password_confirmation" placeholder="Confirm Password *" value="" />
                                        
                                    </div>
                                 
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name *" value="" />
                                        <?php if(isset($_SESSION['alert-name'])){ if($_SESSION['alert-name']=="empty field"){ ?>
                                            <p><?php echo"empty field"?><p>
                                        <?php }} ?>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Your Email  *" value="" />
                                        <?php if(isset($_SESSION['alert-email'])){ if($_SESSION['alert-email']=="empty field"){ ?>
                                            <p><?php echo"empty field"?><p>
                                        <?php }} ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                        <?php if(isset($_SESSION['alert-phone'])){ if($_SESSION['alert-phone']=="empty field"){ ?>
                                            <p><?php echo"empty field"?><p>
                                        <?php }} ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="adress" name="adress" class="form-control" placeholder="Your Adress *" value="" />
                                        <?php if(isset($_SESSION['alert-adress'])){ if($_SESSION['alert-adress']=="empty field"){ ?>
                                            <p><?php echo"empty field"?><p>
                                        <?php }} ?>
                                    </div>

                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
session_unset();
include_once "../../layout/footer.php";
?>