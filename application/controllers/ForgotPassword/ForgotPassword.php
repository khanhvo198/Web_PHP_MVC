<?php 
    class ForgotPassword extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "forgotpassword.style.css";
            $this->data["title"] = "Forgot Password";

            
            $this->view("ForgotPassword/index" , $this->data);
        }


    }
?>