<?php $this->view("layout/header"); ?>
    
    <div class="register row d-flex flex-column align-items-center">
        <h1 style="margin-bottom: 1em;">Create account</h1>
        <form class="text-center d-flex flex-column align-items-center" action="./Register/registerUser", method="POST" style="width: 526px;">
            <input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name*">
            <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name*">
            <input name="email" type="email" class="form-control" id="email" placeholder="Email*">
            <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone*">
            <input name="password" type="password" class="form-control" id="password" placeholder="Password*">
            <button name="btnRegister" type="submit" class="btn btn-secondary" id="btnRegister">REGISTER</button>

            <div class="align-self-start mt-5">
                <img src="<?php echo $this->get_url("../public/images/product/text.png") ?>" alt="">
            </div>
            <div class="align-self-center">
                <img src="<?php echo $this->get_url("../public/images/product/astronaut.png") ?>" alt="">
            </div>
        </form>
    </div>

<?php $this->view("layout/footer"); ?>

<script>

    $("form").on('submit', function() {
        let firstName = $("#firstname").val()
        let lastName = $("#lastname").val()
        let phone = $("#phone").val()
        let password = $("#password").val()


        if (firstName.length == 0) {
            alert("FirstName must have length > 0")
            return false
        }

        if (lastName.length == 0) {
            alert("LastName must have length > 0")
            return false
        }

        if(phone.length <= 6) {
            alert("Phone must have length > 6")
            return false
        }

        if (!password.match(/^[A-Za-z1-9]+$/)) {
            alert("Password must not have invalid character")
            return false
        }

        if (password.length < 6) {
            alert("Password length must > 6")
            return false
        }
    })



</script>