<?php $this->view("layout/header"); ?>

    <div class="row uk-overflow-hidden">
        <div class="slider d-flex flex-column justify-content-center" uk-scrollspy="cls: uk-animation-kenburns; repeat: true; delay: 200">
            <h1 class="align-self-center img-text">Get Started</h3>
        </div>
    </div>


    <div class="row justify-content-around my-5">
        <div class="col-md-5 card d-flex flex-column align-items-center">
            <img src="<?php echo $this->get_url("../public/images/pricing/image 11.png"); ?>" class="card-img-top" alt="">
            <h3>For the ones graduated</h3>
            <p uk-scrollspy="cls:uk-animation-slide-bottom; repeat:true; delay: 200">Do any of the following apply to you?</p>
            <hr>
            <p uk-scrollspy="cls:uk-animation-slide-bottom; repeat:true; delay: 200">You want to change you path of carreer</p>
            <p uk-scrollspy="cls:uk-animation-slide-bottom; repeat:true; delay: 200">You are tired of doing your current boring work repeatively</p>
            <p uk-scrollspy="cls:uk-animation-slide-bottom; repeat:true; delay: 200">You want to explore the whole new dang world of technogy</p>
            <hr>
            <p uk-scrollspy="cls:uk-animation-slide-bottom; repeat:true; delay: 200">If you answered yes, you should apply right now!</p>
            <button type="submit" class="btn btn-secondary">SEE GRAD PLANS</button>
        </div>

        <div class="col-md-5 card d-flex flex-column align-items-center">
            <img src="<?php echo $this->get_url("../public/images/pricing/image 10.png"); ?>" class="card-img-top" alt="">
            <h3>For the ones undergraduated</h3>
            <p uk-scrollspy="cls:uk-animation-slide-bottom; repeat:true; delay: 200">Do any of the following apply to you?</p>
            <hr>
            <p uk-scrollspy="cls:uk-animation-slide-bottom; repeat:true; delay: 200">You are bored with your current studying</p>
            <p uk-scrollspy="cls:uk-animation-slide-bottom; repeat:true; delay: 200">You are tired of doing the same assignment every dang day</p>
            <p uk-scrollspy="cls:uk-animation-slide-bottom; repeat:true; delay: 200">You want to explore the whole new dang world of technogy</p>
            <hr>
            <p uk-scrollspy="cls:uk-animation-slide-bottom; repeat:true; delay: 200">If you answered yes, you should apply right now!</p>
            <button type="submit" class="btn btn-secondary">SEE UNGRAD PLANS</button>
        </div>
    </div>

<?php $this->view("layout/footer"); ?>