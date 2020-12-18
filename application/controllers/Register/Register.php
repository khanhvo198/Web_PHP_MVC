<?php 
    class Register extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "product.style.css";
            $this->data["title"] = "Register";

            
            $this->view("Register/index" , $this->data);
        }


    }
?>
