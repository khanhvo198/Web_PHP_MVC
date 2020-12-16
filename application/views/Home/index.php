<?php $this->view("layout/header"); ?>

        <div class="row">
            <div class="slider d-flex flex-column">
                <h3 class="align-self-center" style="margin:180px auto 30px auto;color:white">Courses that turn small steps into giant leaps.</h3>
                <p class="align-self-center" style="margin-bottom:30px;">Practicing courses on program development by BK Academy</p>
                <a href="#" class="btn btn-primary align-self-center">VIEW LATEST COURSE</a>
            </div>
        </div>
        
        <div class="row">
            <div class="partner" >
                <p class="text-center" style="margin-top: 75px;font-size:20px">BK Academy  has been training developers in...</p>
                <ul class="d-flex justify-content-around" style="padding:0">
                    <li class="col-md-3" style="margin: auto 0;">
                        <img src="./public/images/index/go-daddy-brand.png" class="img-fluid" uk-scrollspy="cls: uk-animation-slide-top; repeat: true; delay:300">
                    </li>
                    <li class="col-md-3" style="margin: auto 0;">
                        <img src="./public/images/index/random-order-brand.png" class="img-fluid" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true; delay:300">
                    </li>
                    <li class="col-md-3" style="margin: auto 0;">
                        <img src="./public/images/index/random-bench-brand.png" class="img-fluid" uk-scrollspy="cls: uk-animation-slide-top; repeat: true; delay:300">
                    </li>
                    <li class="col-md-3" style="margin: auto 0;">
                        <img src="./public/images/index/random-brand.png" class="img-fluid" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true; delay:300">
                    </li>
                </ul>
            </div>
        </div>
        <div class="content row justify-content-around">
            <div class="col-md-5 pr-5 my-auto content-left" uk-scrollspy="cls: uk-animation-slide-left; repeat: true; delay:300">
                <p class="content-left__title">MEET GINTOKI</p>
                <p class="content-left__greeting">Hi there, my name’s Sakata Gintoki</p>
                <p class="content-left__paragraph">I’m a documentary filmmaker, YouTuber</p>
                <p class="content-left__paragraph"> and self-development nerd. I started BK Academy to </p>
                <p class="content-left__paragraph">help people build practical skills for life.</p>
            </div>
            <div class="col-md-5 uk-overflow-hidden" style="padding:0">
                <img src="./public/images/index/content.png" class="img-fluid w-100" style="height:750px"  class="uk-animation-reverse uk-transform-origin-top-right" uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
            </div>
        </div>

        <div class="question-video d-flex flex-column align-items-center" >
            <p class="question-video__title" uk-scrollspy="cls: uk-animation-slide-top; repeat: true; delay:300">THE BIG QUESTION</p>
            <p class="question-video__paragraph" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true; delay:300">Why take this programing course</p>
            <div class="embed-responsive embed-responsive-4by3" style="max-width: 1056px;max-height: 766px;">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Dv7gLpW91DM" allowfullscreen></iframe>
            </div>

        </div>

        <div class="comment row d-flex justify-content-around" style="margin-top: 10rem;">
            <div class="mastery col-sm-3 text-center" uk-scrollspy="cls: uk-animation-slide-right; repeat: true; delay:300">
                <img src="./public/images/index/mastery.png" class="img-fluid" style="width: 110px; height:100px">
                <h5>Mastery takes time</h5>
                <p>We’ve been led to believe that success happens overnight. But embracing real growth is about committing to the journey. And it all begins with having the right mindset.</p>
            </div>
            <div class="no-bs col-sm-3 text-center" uk-scrollspy="cls: uk-animation-slide-right; repeat: true; delay:400">
                <img src="./public/images/index/no-bs.png" class="img-fluid" style="width: 110px; height:100px">
                <h5>No B.S.</h5>
                <p>You’re tired of fast fads and hack secrets and quite frankly so am I. Where many courses skim the surface, I go deep and equip you with tactical, practical skills and tools.</p>
            </div>
            <div class="good-weird col-sm-3 text-center" uk-scrollspy="cls: uk-animation-slide-right; repeat: true; delay:500">
                <img src="./public/images/index/good-weird.png" class="img-fluid" style="width: 110px; height:100px">
                <h5>‘Good’ Weird</h5>
                <p>I get it. Courses can be a hellova snooze fest 😴. So when it comes to our courses, comedic sketches and odd humor comes included. It may get weird.</p>
            </div>
        </div>

        <div class="snapshot row justify-content-around" style="margin-top: 10rem;">
            <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true; delay:300" class="col-md-4 background-runner" style="position: relative;  left: 0; top: 0;">
                <img src="./public/images/index/background-runner.png" style="position: relative;left: 0;top: 0;">
                <img src="./public/images/index/runner.png" style="position: absolute;left: 0;top: 0;">
            </div>
            <div class="col-md-5">
                <p class="snapshot__title">
                    COURSE SNAPSHOT
                </p>
                <p class="snapshot__content">
                    Programming: Take control of your future
                </p>
                <p class="snapshot__paragraph">
                    You have the potential to create lasting positive change in your carreer path. This course is filled with strategies to help you push through procrastination, stay motivated, and keep yourself accountable to build programs that brings huge value to everyone.
                </p>
                <a href="../product/product.html">Learn more</a>
                <svg class="learn-more-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 24">
                    <g fill="none" fill-rule="evenodd">
                    <polyline stroke="#1B1B1B" stroke-width="3" points="82 1 94 12 82 23"></polyline>
                    <line x2="92" y1="12" y2="12" stroke="#1B1B1B" stroke-linecap="square" stroke-width="3"></line>
                    </g>
                </svg>
            </div>
        </div>

        <div class="contact d-flex flex-column align-items-center row">
            <p class="contact__title my-5">Get your weekly dose of motivation.</p>
            <p class="contact__paragraph text-center">
                Sign up to get BK Academy’s weekly newsletter for inspo on productivity, creativity, self-development & pizza*.
                You’ll also get updates about future Slow Growth Academy courses and products.
            </p>
            <div class="email">
                <input type="email" placeholder="Email" style="width: 340px;height:60px;border: none;">
                <button type="submit" class="ml-4 btn btn-dark"style="height:60px;">COUNT ME IN</button>
            </div>
            <p class="contact__quote mt-5">*Due to high demand we are currently out of pizza.</p>
        </div>




<?php $this->view("layout/footer"); ?>