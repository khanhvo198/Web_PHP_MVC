<?php $this->view("layout/header"); ?>

    <div class="row intro justify-content-center">
        <div class="col-md-6 mr-5 d-flex flex-column justify-content-center">
            <h1 class="mb-4">Program Development</h1>
            <h3 class="mb-4">Take control of your future career.</h3>
            <p>This course will equip you with the tools to help you finally push through procrastination, stay motivated, and keep yourself accountable to build program that last a lifetime. You have the potential to create lasting positive change in your path of career.</p>
        </div>
        <div class="col-md-5" style="position: relative; top: 0; left: 0;">
            <img src="./public/images/product/cloud.png" style="position: relative; top: 10%; left: 0;" alt="" uk-scrollspy="cls:uk-animation-slide-right; repeat:true; delay: 600">
            <img src="./public/images/product/runner 1.png" style="position: absolute; top: 0; left: 0;" alt="" uk-scrollspy="cls:uk-animation-slide-left; repeat:true; delay: 600">
        </div>
    </div>

    <div class="row d-flex flex-wrap-reverse intro justify-content-center">
        <div class="col-md-5 mr-5" uk-scrollspy="cls:uk-animation-fade; repeat:true; delay: 200">
            <img src="./public/images/product/Frame 5.png" alt="">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h1 class="mb-4">The Journey of this course</h1>
            <p>BK ACADEMY outlines the programming course in a detailed, methodical, professional way to avoid rambling for you. On the right track, you will save time, money and have the best and sustainable jobs for promotion.</p>
        </div>
    </div>

    <?php
        for ($i = 0; $i < count($this->data["courses"]); $i++) {
            $number = $i + 1;
            $name = $this->data["courses"][$i]["Name"];
            $description = $this->data["courses"][$i]["Description"];
            if ($number % 2 == 1) {
                require "./application/views/Course/coursecardleft.php";
            } else {
                require "./application/views/Course/coursecardright.php";
            }
        }  
    ?>

<?php $this->view("layout/footer"); ?>