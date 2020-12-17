<?php 
    class Home extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "home.style.css";
            $this->data["title"] = "BK ACADEMY";
            
            $this->view("Home/index" , $this->data);
        }


    }
?>
