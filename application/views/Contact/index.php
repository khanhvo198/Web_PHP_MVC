<?php $this->view("layout/header"); ?>
        
    <div class="row uk-overflow-hidden">
        <div class="slider d-flex flex-column justify-content-center" uk-scrollspy="cls: uk-animation-kenburns; repeat: true; delay: 200">
            <h1 class="align-self-center img-text">Contact Us</h3>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-5 suggestion mt-5" uk-scrollspy="cls:uk-animation-shake; repeat:true; delay: 600">
            Need a little help? Have a suggestion? Wanna write us a love letter? Hit us up and we’ll get back to you asap.
        </div>
    </div>


    <form class="form-div align-self-center mt-5">
        <div class="form-row">
            <div class="col-md pr-4" uk-scrollspy="cls:uk-animation-slide-left; repeat:true; delay: 100">
                <input type="text" class="form-control my-3" placeholder="First Name*">
                <input type="text" class="form-control my-3" placeholder="Last Name*">
                <input type="text" class="form-control my-3" placeholder="Email*">
                <input type="text" class="form-control my-3" placeholder="Subject*">
            </div>

            <div class="col-md my-3 pr-4" uk-scrollspy="cls:uk-animation-slide-right; repeat:true; delay: 100">
                <textarea class="form-control h-100" id="message" placeholder="Message*"></textarea>
            </div>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-secondary">SUBMIT</button>
        </div>
        
    </form>

    <div class="support-hour align-self-center my-3">
        Support hours: Monday – Friday 9am – 5pm
    </div>

<?php $this->view("layout/footer"); ?>