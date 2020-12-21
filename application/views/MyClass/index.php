<?php
    if(!isset($_SESSION['signedin'])){
        header("Location: ./Login");
        exit();  
    }
?>


<?php $this->view("layout/header"); ?>

    <div class="text my-5">On progress classes</div>
    <div class="row mb-5">
        <?php
            for ($i = 0; $i < 5; $i++) {
                require "./application/views/MyClass/coursecard.php";
            } 
        ?>
    </div>

    <div class="text my-5">Comming classes</div>
    <div class="row mb-5">
    <?php
            for ($i = 0; $i < 1; $i++) {
                require "./application/views/MyClass/coursecard.php";
            } 
        ?>
    </div>

    <div class="text my-5">Finished classes</div>
    <div class="row mb-5">
    <?php
            for ($i = 0; $i < 2; $i++) {
                require "./application/views/MyClass/coursecard.php";
            } 
        ?>
    </div>

        
    <div class="text my-5"><a href="<?php echo $this->get_url("../Course") ?>">New Courses</a></div>


<?php $this->view("layout/footer"); ?>