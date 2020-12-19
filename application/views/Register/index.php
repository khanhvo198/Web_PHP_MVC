<?php $this->view("layout/header"); ?>
    
    <div class="register row d-flex flex-column align-items-center">
        <h1 style="margin-bottom: 1em;">Create account</h1>
        <form class="text-center d-flex flex-column align-items-center" action="./Register/registerUser", method="POST" style="width: 526px;">
            <input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name*">
            <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name*">
            <input name="email" type="email" class="form-control" id="email" placeholder="Email*">
            <input name="phone" type="number" class="form-control" id="email" placeholder="Phone*">
            <input name="password" type="password" class="form-control" id="password" placeholder="Password*">
            <button name="btnRegister" type="submit" class="btn btn-secondary">REGISTER</button>

            <!-- <div class="align-self-start mt-5">
                <img src="./public/images/product/text.png" alt="">
            </div>
            <div class="align-self-center">
                <img src="./public/images/product/astronaut.png" alt="">
            </div> -->
        </form>
    </div>

<?php $this->view("layout/footer"); ?>