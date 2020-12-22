<?php
    if(!isset($_SESSION['signedin'])){
        header("Location: ./Login");
        exit();  
    }

    if(isset($_SESSION['admin'])) {
        header("Location: ./Profile");
        exit();
    }
?>


<?php $this->view("layout/header"); ?>

    <div class="text my-5">On progress classes</div>
    <div class="row mb-5">
        <?php
            foreach ($this->data["onprogress"] as $course) {
                require "./application/views/MyClass/coursecard.php";
            } 
        ?>
    </div>

    <div class="text my-5">Comming classes</div>
    <div class="row mb-5">
    <?php
            foreach ($this->data["comming"] as $course) {
                require "./application/views/MyClass/coursecard.php";
            } 
        ?>
    </div>

    <div class="text my-5">Finished classes</div>
    <div class="row mb-5">
    <?php
            foreach ($this->data["finished"] as $course) {
                require "./application/views/MyClass/coursecard.php";
            } 
        ?>
    </div>

        
    <div class="text my-5"><a href="<?php echo $this->get_url("../Course") ?>">New Courses</a></div>


<?php $this->view("layout/footer"); ?>