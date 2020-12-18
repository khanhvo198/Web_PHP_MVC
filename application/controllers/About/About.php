<?php 
    class About extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "about.style.css";
            $this->data["title"] = "About";

            
            $this->view("About/index" , $this->data);
        }


    }
?>
