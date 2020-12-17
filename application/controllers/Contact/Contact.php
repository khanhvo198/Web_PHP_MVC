<?php 
    class Contact extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "contact.style.css";

            
            $this->view("Contact/index" , $this->data);
        }


    }
?>
