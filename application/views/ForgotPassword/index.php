<?php $this->view("layout/header"); ?>



        <form action="" class="d-flex flex-column align-items-center" class="login-form" style="margin-top: 180px;height: 62vh;">
            <div class="col-md-6" style="margin: auto 0;">
                <div class="form-group">
                    <p style="font-size: 14px;">Lost your password? Please enter your Email Address. You will receive a link to create a new password via email.</p>
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <a href="#" class="btn btn-dark mt-3" style="border-radius: 0;">RESET PASSWORD</a>
                </div>

            </div>

        </form>


<?php $this->view("layout/footer"); ?>
