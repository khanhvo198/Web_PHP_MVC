<?php $this->view("layout/header"); ?>
        <div style="margin-top: 200px;height: 62vh;">
            <form action="" class="d-flex flex-column align-items-center login-form">
                <div class="col-md-6">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <a href="./ForgotPassword" style="font-size: 14px;font-weight: 600;" >Forgot your password?</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-check" style="padding-left:75%;">
                        <input type="checkbox">
                        <label class="form-check-label">Remember me</label>
                    </div>
                    <a href="#" class="btn" style="margin-left: 75%;width: 120px;background-color: #42F2CB;border-radius: 0;">
                        SIGN IN
                    </a>
                </div>
    
                <div class="login-border-bottom col-md-6">
                </div>
    
                <div class="col-md-6">
                    <p class="text-center" style="font-size: 14px;">Haven’t purchase the course yet? Click <a href="../product/product.html" style="color: #42F2CB;font-weight: 600;text-decoration: underline;">here</a> to purchase
                    </p>
                </div>
            </form>

        </div>

<?php $this->view("layout/footer"); ?>