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
                <?php if(isset($_SESSION['error'])){ ?>
                                            <p style="color:red;"><?php echo$_SESSION['error']?><p>
                                        <?php } ?>
                        
                        <form action="/controller/auth/register.php" method="POST" id="form">
                            <div class="row register-form">
                                <div class="col-md-6">
                                
                                    <div class="form-group  ">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="username *" value="" />
                                       
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Password *" value="" />
                                       
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="password2" name="password_confirmation" placeholder="Confirm Password *" value="" />
                                        
                                    </div>
                                 
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name *" value="" />
                                       
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Your Email  *" value="" />
                                     
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                     
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="adress" name="adress" class="form-control" placeholder="Your Adress *" value="" />
            
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