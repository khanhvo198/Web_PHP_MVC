        
        <div class="footer row justify-content-center">
            <div class="col-md-8 d-flex">
                <div class="pt-4 mr-auto">
                    <div class="d-flex">
                        <a href="./About" class="align-self-center pr-4" style="color:#000">About us</a>
                        <a href="./Course" class="align-self-center pr-4" style="color:#000">Course</a>
                        <a href="./Pricing" class="align-self-center pr-4" style="color:#000">Pricing</a>
                        <a href="./Contact" class="align-self-center pr-4" style="color:#000">Contact</a>
                        <a href="#" class="align-self-center pr-4" style="color:#000">Login</a>
                    </div>
                    <p class="pt-3">©Copyright 2020 BK Academy</p>
                </div>
                <div class="pt-2">
                    <img src="<?php echo $this->get_url("../public/images/index/image 8.png") ?>">
                </div>
            </div>
        </div>
    </div>
</body>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit-icons.min.js"></script>
<?php
    if(isset($this->data["js"])) {
        echo "<script src=\"./public/js/". $this->data["js"]. "\"></script>";
    }
?>
</html>