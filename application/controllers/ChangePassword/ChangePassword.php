<?php 
    class ChangePassword extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "changepassword.style.css";
            $this->data["title"] = "Change Password";

            
            $this->view("ChangePassword/index" , $this->data);
        }


    }
?>
