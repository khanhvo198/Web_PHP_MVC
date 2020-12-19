<?php $this->view("layout/header"); ?>
    
    <div class="changepassword row d-flex flex-column align-items-center">
        <h1 style="margin-bottom: 1em;">Change Password</h1>
        <form class="text-center d-flex flex-column align-items-center" action="" style="width: 526px;">
            <input type="password" class="form-control" id="oldpassword" placeholder="Old password*">
            <input type="password" class="form-control" id="newpassword" placeholder="New password*">
            <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm new password*">
            <button type="submit" class="btn btn-secondary">SUBMIT</button>

            <div class="align-self-start mt-5">
                <img src="./public/images/product/text.png" alt="">
            </div>
            <div class="align-self-center">
                <img src="./public/images/product/astronaut.png" alt="">
            </div>
        </form>
    </div>

<?php $this->view("layout/footer"); ?>