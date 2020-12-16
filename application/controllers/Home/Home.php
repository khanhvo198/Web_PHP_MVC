<?php 
    class Home extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "home.style.css";

            
            $this->view("Home/index" , $this->data);
        }


    }
?>
