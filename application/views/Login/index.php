<?php
    if(isset($_SESSION['signedin'])){
        header("Location: ./Profile");
        exit();  
    }
?>


<?php $this->view("layout/header"); ?>

    <div class="row login">
        <div class="col-md-12" style="margin-top: 5em;height:80vh;">
            <form action="./Login/authenticate" method="POST" class="d-flex flex-column align-items-center login-form">
                <div class="col-md-6">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email Address">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <a href="./ForgotPassword" style="font-size: 14px;font-weight: 600;" >Forgot your password?</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <a href="./Register" style="font-size: 14px;font-weight: 600;" >Register</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-check" style="padding-left:75%;">
                        <input type="checkbox">
                        <label class="form-check-label">Remember me</label>
                    </div>
                    <button name="btnLogin" type="submit" class="btn" style="margin-left: 75%;width: 120px;background-color: #42F2CB;border-radius: 0;">
                        SIGN IN
                    </button>
                </div>
    
                <div class="login-border-bottom col-md-6">
                </div>
    
                <div class="col-md-6">
                    <p class="text-center" style="font-size: 14px;">Haven’t purchase the course yet? Click <a href="../product/product.html" style="color: #42F2CB;font-weight: 600;text-decoration: underline;">here</a> to purchase
                    </p>
                </div>

                <!-- <div class="row d-flex flex-column align-items-center">
                    <div class="align-self-start mt-5">
                        <img src="./public/images/product/text.png" alt="">
                    </div>
                    <div class="align-self-center">
                        <img src="./public/images/product/astronaut.png" alt="">
                    </div>
                </div> -->
            </form>
        </div>
    </div>



<?php $this->view("layout/footer"); ?>