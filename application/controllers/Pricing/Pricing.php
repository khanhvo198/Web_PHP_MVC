<?php 
    class Pricing extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "pricing.style.css";

            
            $this->view("Pricing/index" , $this->data);
        }


    }
?>
