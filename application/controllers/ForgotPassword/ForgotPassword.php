<?php 
    class ForgotPassword extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "forgot_password.style.css";
            $this->data["title"] = "Forgot Password";

            
            $this->view("ForgotPassword/index" , $this->data);
        }


    }
?>