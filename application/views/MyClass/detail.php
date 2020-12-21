<?php
    if(!isset($_SESSION['signedin'])){
        header("Location: ./Login");
        exit();  
    }
?>


<?php $this->view("layout/header"); ?>

    <div class="d-flex flex-column align-items-center">
        <div class="question-video d-flex flex-column align-items-center" >
            <p class="question-video__title" uk-scrollspy="cls: uk-animation-slide-top; repeat: true; delay:300">Class Detail</p>
            <div class="embed-responsive embed-responsive-4by3" style="max-width: 1056px;max-height: 766px; width:50vw">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Dv7gLpW91DM" allowfullscreen></iframe>
            </div>
        </div>
    </div>

<?php $this->view("layout/footer"); ?>