<?php 
    class Contact extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "contact.style.css";
            $this->data["title"] = "Contact";

            
            $this->view("Contact/index" , $this->data);
        }


    }
?>
