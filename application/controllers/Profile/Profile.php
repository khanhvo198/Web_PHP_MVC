<?php 
    class Profile extends Controller {
        protected $data;

        function index() {
            $this->data["css"] = "profile.style.css";
            $this->data["title"] = "Profile";

            
            $this->view("Profile/index" , $this->data);
        }


    }
?>
