<div class="row course justify-content-center d-flex flex-wrap-reverse" uk-scrollspy="cls:uk-animation-slide-right; repeat:true; delay: 200">
    <div class="col-md-9" style="margin-top: 3em; margin-bottom: 3em;">
        <h2><?php echo $name ?></h2>
        <div class="row">
            <div class="col-md-6" style="margin-bottom: 3em;">
                <img src="./public/images/product/02.png" alt="">
            </div>
            <div class="col-md-6">
                <p><?php echo $description ?></p>
                <div class="text-center">
                    <button type="button" class="btn btn-dark">DETAIL</button>
                </div>
                
                <!-- <div class="row justify-content-around">
                    <div class="col-md-5 col-sm-5">
                        <button type="button" class="btn btn-dark">NEED CONSULTANT</button>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <button type="button" class="btn btn-dark">COUNT ME IN</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="col-md-2 text-center d-flex flex-column justify-content-center number course-border-left"><?php echo $number ?></div>
</div>
