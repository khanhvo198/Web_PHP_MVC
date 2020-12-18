<?php 
    class Login extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "login.style.css";
            $this->data["title"] = "Login";

            
            $this->view("Login/index" , $this->data);
        }


    }
?>